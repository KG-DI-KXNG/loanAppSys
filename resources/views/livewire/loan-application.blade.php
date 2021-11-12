<div>
    <div class="leading-loose w-full">
        <form class="w-full m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent>
          <p class="text-gray-800 font-medium text-2xl animate__animated animate__bounce">Customer information</p>
       
          <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-sm text-gray-600" for="cus_fname">First Name</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" wire:model="cus_fname" type="text" required="" placeholder="First Name...." aria-label="FirstName">
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="cus_lname">Last Name</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_lname"  wire:model="cus_lname" type="text" required="" placeholder="Last Name..." aria-label="LastName">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Email</label>
            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" wire:model="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
          </div>
          <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" wire:model="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
          </div>
          <div class="mt-2">
            <label class=" text-sm block text-gray-600" for="cus_email">City</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" wire:model="cus_email" type="text" required="" placeholder="City" aria-label="Email">
          </div>
          <div class="inline-block mt-2 w-1/2 pr-1">
            <label class=" block text-sm text-gray-600" for="cus_email">Country</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" wire:model="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="cus_email">Date of Birth</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_dob"  wire:model="cus_dob" type="text" required="" placeholder="Zip" aria-label="Email">
          </div>
          <div class="border-b-2 w-full h-1 mt-4"></div>
          <p class="mt-4 text-gray-800 font-medium">Additional information</p>
          <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Loan Amount</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" wire:model="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div>
          <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Valid ID</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" wire:model="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div>
          <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Proof of Income</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" wire:model="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div>
          <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Loan Amount</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" wire:model="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div>
          <div class="mt-4">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="button" wire.click="submit">Submit</button>
          </div>
        </form>
      </div>
</div>
