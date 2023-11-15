<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<?php include("includes/navigation.php"); ?>
	<main>
		<form id="patient-form" action="#" class="p-4 md:p-5">
			<div class="grid grid-cols-2 gap-4 mb-4">
				<div class="col-span-2">
					<label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
						Name</label>
					<input type="text" name="firstName" id="firstName"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
						placeholder="First Name" required="">
				</div>
				<div class="col-span-2">
					<label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
						Name</label>
					<input type="text" name="lastName" id="lastName"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
						placeholder="Last Name" required="">
				</div>
				<div class="col-span-2 sm:col-span-1">
					<label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB</label>
					<input type="date" name="dob" id="dob"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
						placeholder="12/12/2012" required="">
				</div>
				<div class="col-span-2 sm:col-span-1">
					<label for="gender"
						class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
					<select name="gender" id="gender"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="col-span-2">
				<button type="reset"
					class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
					Clear
				</button>

				<button type="button" onclick="submitPatientForm()"
					class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
					Save
				</button>
				<div id="status"></div>
			</div>
		</form>
	</main>

	<?php include("includes/footer.php"); ?>