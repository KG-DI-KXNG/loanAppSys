<div>
  
  
  <div class="leading-loose max-w-2xl md:max-w-4xl flex justify-center">
    
        <form class="m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent>
          <p class="text-gray-800 font-medium text-2xl animate__animated animate__bounce">Customer information</p>
       
          <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-sm text-gray-600" for="fname">First Name <span class="text-red-500">* @error('loaner.fname') {{ $message}}@enderror</span></label>
            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="fname" wire:model="loaner.fname" type="text" required="" placeholder="First Name...." aria-label="FirstName">
          </div>

          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="lname">Last Name<span class="text-red-500">* @error('loaner.lname') {{ $message}}@enderror</span></label>
            <input 
              class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" 
              id="lname"  
              wire:model="loaner.lname" 
              type="text" 
              required="" 
              placeholder="Last Name..."
              aria-label="LastName">
            
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="email">Email<span class="text-red-500">* @error('loaner.email') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="email" wire:model="loaner.email" type="text" required="" placeholder="Your Email" aria-label="Email">
          </div>
          <div class="flex w-full justify-between">
          <div class="inline-block mt-2 w-1/3">
            <label class=" block text-sm text-gray-600" for="address">Address<span class="text-red-500">* @error('loaner.address') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="address" wire:model="loaner.address" type="text" required="" placeholder="Address" aria-label="address">
          </div>
          <div class="inline-block mt-2 pl-2 -mx-1 w-1/3">
            <label class=" text-sm block text-gray-600" for="city">City<span class="text-red-500">* @error('loaner.city') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="city" wire:model="loaner.city" type="text" required="" placeholder="City" aria-label="city">
          </div>
          <div class="inline-block mt-2 w-1/3 pl-1">
            <label class=" block text-sm text-gray-600" for="country">Country<span class="text-red-500">* @error('loaner.country') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="country" wire:model="loaner.country" type="text" required="" placeholder="Country" aria-label="country">
          </div>
        </div>
          <div class="inline-block mt-2 -mx-1 pr-1 w-1/2">
            <label class="block text-sm text-gray-600" for="dob">Date of Birth<span class="text-red-500">* @error('loaner.dob') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="dob"  wire:model="loaner.dob" type="date" required="" aria-label="date of birth">
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="contact">Contact #<span class="text-red-500">* @error('loaner.contact') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="contact"  wire:model="loaner.contact" type="tel" required="" aria-label="date of birth">
          </div>
          <div class="border-b-2 w-full h-1 mt-4"></div>
          <p class="mt-4 text-gray-800 font-medium">Additional information</p>
          <div class="inline-block mt-2 w-1/2 pr-1" >
            <label class="block text-sm text-gray-600" for="amt">Loan Amount <span class="text-red-500">* @error('loaner.amt') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="amt" wire:model="loaner.amt" type="number" required="" placeholder="$" aria-label="Name">
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="amt">Type of loan <span class="text-red-500">* @error('loaner.type') {{ $message}}@enderror</span></label>
            <select wire:model="loaner.type" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
              <option hidden selected >--Select Type--</option>
              @foreach ($loanType as $type)

              <option value="{{$type->id}}">{{$type->loan_nm}}</option>
              @endforeach
            </select>
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="cus_name">Valid ID</label>
            <input class="w-full px-2 py-2 text-gray-700 rounded" id="cus_name" wire:model="loaner.idFile" type="file" required="" aria-label="Name">
          </div>
          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="cus_name">Proof of Income</label>
            <input class="w-full px-2 py-2 text-gray-700  rounded" id="cus_name" wire:model="loaner.incomeFile" type="file" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div>
          {{-- <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Loan Amount</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" wire:model="loaner.cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
          </div> --}}
          <div class="border-b-2 w-full h-1 mt-4"></div>
          <p class="mt-4 text-gray-800 font-medium">Guarantee information</p>
          <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-sm text-gray-600" for="gfname">First Name<span class="text-red-500">* @error('guarantee.gFname') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="gfname" wire:model.lazy="guarantee.gFname" type="text" required="" placeholder="Guarantee First Name...." aria-label="Gurantee First Name">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
          </div>

          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="glname">Last Name<span class="text-red-500">* @error('guarantee.gLname') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="glname"  wire:model.lazy="guarantee.gLname" type="text" required="" placeholder="Guarantee Last Name..." aria-label="Guarantee Last Name">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
          </div>
          
          <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-sm text-gray-600" for="gEmail">Email<span class="text-red-500">* @error('guarantee.gEmail') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="gEmail" wire:model.lazy="guarantee.gEmail" type="email" required="" placeholder="Guarantee@email.com" aria-label="Guarantee Email">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
          </div>

          <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-600" for="gContact">Contact #<span class="text-red-500">* @error('guarantee.gContact') {{ $message}}@enderror</span></label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="gContact"  wire:model.lazy="guarantee.gContact" type="tel" required="" placeholder="876-000-0000" aria-label="Guarantee Contact">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
          </div>
          <div class="mt-4">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="button" wire:click="submit">Submit</button>
          </div>
        </form>
      </div>

</div>
