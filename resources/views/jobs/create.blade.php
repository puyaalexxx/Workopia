<x-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>

        <!-- Form Start -->
        <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
            @csrf

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">Job Info</h2>

            <!-- Job Title -->
            <x-inputs.text
                id="title"
                name="title"
                label="Job Title"
                placeholder="Software Engineer"
            />

            <x-inputs.textarea
                id="description"
                name="description"
                label="Job Description"
                placeholder="We are seeking a skilled and motivated Software Developer..."
            />

            <x-inputs.text
                id="salary"
                name="salary"
                label="Annual Salary"
                type="number"
                placeholder="90000"
            />

            <x-inputs.textarea
                id="requirements"
                name="requirements"
                label="Requirements"
                placeholder="Bachelor's degree in Computer Science"
            />

            <x-inputs.textarea
                id="benefits"
                name="benefits"
                label="Benefits"
                placeholder="Health insurance, 401k, paid time off"
            />

            <x-inputs.text
                id="tags"
                name="tags"
                label="Tags (comma-separated)"
                type="text"
                placeholder="development,coding,java,python"
            />

            <x-inputs.select
                id="job_type"
                name="job_type"
                label="Job Type"
                :options="['Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', 'Contract' => 'Contract', 'Temporary' => 'Temporary',
                            'Internship' => 'Internship', 'Volunteer' => 'Volunteer', 'On-Call' => 'On-Call']"
                value="{{ old('job_type') }}"
            />

            <x-inputs.select
                id="remote"
                name="remote"
                label="Remote"
                :options="[0 => 'No', 1 => 'Yes']"
            />

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-inputs.text
                id="address"
                name="address"
                label="Address"
                type="text"
                placeholder="123 Main St"
            />

            <x-inputs.text
                id="city"
                name="city"
                label="City"
                type="text"
                placeholder="Albany"
            />

            <x-inputs.text
                id="state"
                name="state"
                label="State"
                type="text"
                placeholder="NY"
            />

            <x-inputs.text
                id="zipcode"
                name="zipcode"
                label="ZIP Code"
                type="text"
                placeholder="12201"
            />

            <x-inputs.text
                id="company_name"
                name="company_name"
                label="Company Name"
                type="text"
                placeholder="Company name"
            />

            <x-inputs.textarea
                id="company_description"
                name="company_description"
                label="Company Description"
                placeholder="Company Description"
            />

            <x-inputs.text
                id="company_website"
                name="company_website"
                label="Company Website"
                type="url"
                placeholder="Enter website"
            />

            <x-inputs.text id="contact_phone" name="contact_phone" label="ContactPhone" type="text"
                           placeholder=" Enter phone"/>

            <x-inputs.text
                id="contact_email"
                name="contact_email"
                label="Contact Email"
                type="email"
                placeholder="Email where you want to receive applications"
            />

            <x-inputs.file
                id="company_logo"
                name="company_logo"
                label="Company Logo"
            />

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
