<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <?php include("includes/navigation.php"); ?>

    <?php
    require_once "vendor/autoload.php";
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;

    $client = new Client();
    $headers = [
        'Content-Type' => 'application/json'
    ];
    $request = new Request('GET', 'localhost:3000/vitals', $headers);
    $res = $client->sendAsync($request)->wait();
    // Decode the JSON response
    $data = json_decode($res->getBody(), true);


    ?>

    <div class="container" id="main-content">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
                <!-- Start coding here -->
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div
                        class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="date-filter">Date Filter</label>
                                <div class="relative w-full">
                                    <input type="date" id="date-filter"
                                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div
                            class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                            <!-- Modal toggle -->
                            <button data-modal-target="record-crud-modal" data-modal-toggle="record-crud-modal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Record Vitals
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">

                        <?php
                        // Check if decoding was successful
                        if ($data !== null) {
                            ?>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Date</th>
                                        <th scope="col" class="px-4 py-3">Height</th>
                                        <th scope="col" class="px-4 py-3">Weight</th>
                                        <th scope="col" class="px-4 py-3">BMI</th>
                                        <th scope="col" class="px-4 py-3">General Health</th>
                                        <th scope="col" class="px-4 py-3">On Drugs</th>
                                        <th scope="col" class="px-4 py-3">Comments</th>
                                        <th scope="col" class="px-4 py-3">Patient</th>
                                        <th scope="col" class="px-4 py-3">
                                            View Reports
                                        </th>
                                    </tr>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($data as $vital) {
                                        ?>
                                        <tr class="border-b dark:border-gray-700">
                                            <td class="px-4 py-3"><?php echo $vital['date'] ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['height'] ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['weight'] ?></td>
                                            <td class="px-4 py-3"><?php $bmi = $vital['bmi'];

                                            if ($bmi < 18.5) {
                                                echo "Underweight";
                                                } elseif ($bmi >= 18.5 && $bmi < 25) {
                                                echo "Normal";
                                                } elseif ($bmi >= 25) {
                                                echo "Overweight";
                                                } else {
                                                echo "Invalid BMI value";
                                                } ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['generalHealth'] ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['takingDrugs'] ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['comments'] ?></td>
                                            <td class="px-4 py-3"><?php echo $vital['patientId'] ?></td>
                                            <td class="px-4 py-3">
                                                <!-- Modal toggle -->
                                                <button data-modal-target="vital-crud-modal"
                                                    data-modal-toggle="vital-crud-modal"
                                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button" data-patient-id="<?php echo $patient['patientId'] ?>"
                                                    onclick="setPatientId(this)">
                                                    View
                                                </button>
                                            </td>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            } else {
                            echo 'Failed to decode JSON response';
                            }
                        ?>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("includes/footer.php");