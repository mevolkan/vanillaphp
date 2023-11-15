<!-- Vital modal -->
<div id="vital-crud-modal" tabindex="-1" aria-hidden="true"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
	<div class="relative w-full max-w-md max-h-full p-4">
		<!-- Modal content -->
		<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
			<!-- Modal header -->
			<div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white">
					Add Patient Vital
				</h3>
				<button type="button"
					class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
					data-modal-toggle="vital-crud-modal">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
						viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<!-- Modal body -->
			<form id="vital-form" class="p-4 md:p-5">
				<div class="grid grid-cols-2 gap-4 mb-4">
					<input type="hidden" name="patientId" id="patientId"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
						placeholder="patientId">

					<div class="col-span-2 sm:col-span-1">
						<label for="date"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
						<input type="date" name="date" id="date"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
							placeholder="Date" required="">
					</div>
					<div class="col-span-2 sm:col-span-1">
						<label for="height"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height</label>
						<input type="number" name="height" id="height"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
							placeholder="Height (cm)" required="" onkeyup="calculateBMI()">
					</div>
					<div class="col-span-2 sm:col-span-1">
						<label for="weight"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
						<input type="number" name="weight" id="weight"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
							placeholder="Weight (kg)" required="" onkeyup="calculateBMI()">
					</div>
					<div class="col-span-2 sm:col-span-1">
						<label for="bmi"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BMI</label>
						<input type="text" name="bmi" id="bmi"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
							placeholder="BMI" required="">
					</div>
					<div class="col-span-2" data-bmi-hidden="true">
						<fieldset>
							<legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">General Health
							</legend>
							<div class="flex items-center mb-4">
								<input id="generalHealth-1" type="radio" name="generalHealth" value="good"
									class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
									checked>
								<label for="generalHealth-1"
									class="block text-sm font-medium text-gray-900 sm-2 dark:text-white">
									Good
								</label>
							</div>
							<div class="flex items-center mb-4">
								<input id="generalHealth-2" type="radio" name="generalHealth" value="poor"
									class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
								<label for="generalHealth-2"
									class="block text-sm font-medium text-gray-900 sm-2 dark:text-white">
									Poor
								</label>
							</div>
						</fieldset>
					</div>
					<div class="col-span-2" data-bmi-hidden="true">
						<fieldset>
							<legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Are you
								currently taking any drugs?
							</legend>
							<div class="flex items-center mb-4">
								<input id="takingDrugs-1" type="radio" name="takingDrugs" value="yes"
									class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
									checked>
								<label for="takingDrugs-1"
									class="block text-sm font-medium text-gray-900 sm-2 dark:text-white">
									Yes
								</label>
							</div>
							<div class="flex items-center mb-4">
								<input id="takingDrugs-2" type="radio" name="takingDrugs" value="no"
									class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
								<label for="takingDrugs-2"
									class="block text-sm font-medium text-gray-900 sm-2 dark:text-white">
									No
								</label>
							</div>
						</fieldset>
					</div>
					<div class="col-span-2" data-bmi-hidden="true">
						<label for="comments"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comments</label>
						<textarea id="comments" rows="4" name="comments"
							class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
							placeholder="Write comment here"></textarea>
					</div>
				</div>
				<button type="button"
					class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
					onclick="submitVitalForm()">
					Add Vitals
				</button>
			</form>
		</div>
	</div>
</div>






<!-- Patient modal -->
<div id="patient-crud-modal" tabindex="-1" aria-hidden="true"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
	<div class="relative w-full max-w-md max-h-full p-4">
		<!-- Modal content -->
		<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
			<!-- Modal header -->
			<div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white">
					Patient Registration
				</h3>
				<button type="button"
					class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
					data-modal-toggle="patient-crud-modal">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
						viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<!-- Modal body -->
			<form id="patient-form" action="#" class="p-4 md:p-5">
				<div class="grid grid-cols-2 gap-4 mb-4">
					<div class="col-span-2">
						<label for="firstName"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
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
						<label for="dob"
							class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB</label>
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
		</div>
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
<script src="/includes/js/scripts.js"></script>



<footer class="m-4 bg-white rounded-lg shadow dark:bg-gray-800">
	<div class="w-full max-w-screen-xl p-4 mx-auto md:flex md:items-center md:justify-between">
		<span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">

			&copy; <?php print date("Y"); ?>
			. All Rights Reserved.
		</span>
		<ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
			<li>
				<a href="#" class="hover:underline me-4 md:me-6">About</a>
			</li>
			<li>
				<a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
			</li>
			<li>
				<a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
			</li>
			<li>
				<a href="#" class="hover:underline">Contact</a>
			</li>
		</ul>
	</div>
</footer>


</body>

</html>