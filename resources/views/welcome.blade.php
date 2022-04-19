@extends('layouts.app') @section('title', 'home') @section('body')



<div class=" font-Eureka">
    <div class="">
        <style>
            [x-cloak] {
                display: none;
            }
        </style>
        <div x-data="app()" x-cloak>
            <div class=" w-full py-10">
                <div x-show.transition="step != '4'">
                    <!-- Step Content -->
                    <div class="pt-12 pb-24">
                        <div x-show.transition.in="step === 1">
                            <div class="flex" style="min-height: 500px;" x-data="{ destinations: [
                                {id: 'cairo', label: 'OTTO Cairo',desImg: 'cairo.jpg'},
                                {id: 'giza', label: 'OTTO Giza',desImg: 'giza.jpg'},
                                {id: 'alex', label: 'OTTO Alex',desImg: 'alex.jpg'},
                                ]}">
                                <div class="px-3 column w-full sm:w-1/2">
                                    <form id="step_1" class="form">
                                        <div class="relative mb-12 text-25">
                                            <select id="branch" class="appearance-none form_input outline-0 text-scarpa-flow w-full text-input p-5 mb-4 shadow-topshadow bg-white font-bold cursor-pointer transition duration-300 border-half border-input ease" name="branch" required="required" x-model="destinations.id">
                                                <option value="" disabled>
                                                    Choose A Destination
                                                </option>
                                                <template x-for="destination in destinations">
                                                    <option :value="destination.id" x-text="destination.label" :img_src="destination.desImg"></option>
                                                </template>
                                            </select>
                                            
                                            <svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-svg text-scarpa-flow max-h-5 absolute top-7 right-6 pointer-events-none w-5 cursor-pointer"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>

                                        </div>
                                        <div class="relative mb-12 text-25">
                                            <select id="branch" name="branch" required="required" class="appearance-none is-fullwidth is-cash form_input border-half border-input outline-0 transition duration-300 ease text-input text-scarpa-flow mb-4 w-full shadow-topshadow bg-white font-bold p-5 cursor-pointer"
                                                x-data="{ seats: [1,2,3,4,5,6,7,8,9,10]}">
                                                <option value="">
                                                Number Of Seats
                                                </option>
                                                <template x-for="seat in seats">
                                                    <option :value="seat" x-text="seat+' Seats'"></option>
                                                </template> 
                                            </select>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-svg text-scarpa-flow max-h-5 absolute top-7 right-6 pointer-events-none w-5 cursor-pointer"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                                        </div>
                                        <div class="accept relative flex w-full text-25">
                                            <input id="accept" value="accept" type="checkbox" name="payment" required="required" class="styled-checkbox invisible w-0">
                                            <label for="accept" class="flex items-center w-full flex checkbox border-0 text-input text-scarpa-flow" data-v-668beab6="">I accept <label for="my-modal-4" class="ml-2 underline cursor-pointer text-scarpa-flow-600"><strong>Our Limitations</strong></label>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-3 w-1/2 hidden sm:flex ">
                                    <img x-bind:src="'{{URL::asset('/images/destinations')}}/'+destinations.id+'.jpg'" x-text="destinations.id" class="mb-100 is-fullwidth">
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 2">


                            form 2

                        </div>
                        <div x-show.transition.in="step === 3">
                            <div class="grid lg:grid-cols-2 sm:grid-flow-cols-1">
                                <div class="px-3">
                                    <div class="grid gap-4 grid-cols-2">
                                        <input class="bg-white shadow-topshadow text-lg py-5 px-5 mb-6 focus:outline-none text-25" required="required" placeholder="First Name" type="text">
                                        <input class="bg-white shadow-topshadow text-lg py-5 px-5 mb-6 focus:outline-none text-25" required="required" placeholder="Last Name" type="text">
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <input class="bg-white shadow-topshadow text-lg py-5 px-5 mb-6 focus:outline-none text-25" required="required" placeholder="Email" type="email">
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <input class="bg-white shadow-topshadow text-lg py-5 px-5 mb-6 focus:outline-none text-25" required="required" placeholder="Mobile" type="text">
                                    </div>

                                    <div class="mt-12">
                                        <div class="text-25 text-tundora-500 font-bold">Checkout</div>
                                        <div class="text-25 text-scarpa-flow-500 mt-6">
                                            <span>Location</span>
                                            <span class="text-redwood-500">: OTTO Cairo</span>
                                        </div>
                                        <div class="text-25 text-scarpa-flow-500 ">
                                            <span>Date</span>
                                            <span class="text-redwood-500">: Thu Apr 21 2022</span>
                                        </div>
                                        <div class="text-25 text-scarpa-flow-500 mb-6 ">
                                            <span>Time</span>
                                            <span class="text-redwood-500">: 1pm</span>
                                        </div>
                                        <div class="text-25 text-scarpa-flow-500  ">
                                            <span>Number of seats</span>
                                            <span class="text-redwood-500">: 2</span>
                                        </div>
                                        <div class="text-25 text-scarpa-flow-500  ">
                                            <span>Reservation amount</span>
                                            <span class="text-[#12a99f]">: 400 EGP</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="px-3">
                                    <img class="mb-4" src="{{URL::asset('/images/destinations/giza.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Step Content -->
                </div>
                <div x-show.transition="step === '4'">
                    <div class="flex justify-center">
                        <div>
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Booked successfully</h2>

                            <div class="text-gray-600 mb-8">
                                Thank you. We have sent you an email.
                            </div>  

                            <button @click="step = 1" class="w-auto block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Make another reservation</button>
                        </div> 
                    </div>
                </div> 
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0  bg-white shadow-topshadow" x-show="step != '4'">
                <div class="mx-auto">
                    <div class="flex justify-between">
                        <div class="w-3/4 pl-24">
                            <div class="grid grid-cols-4 pt-6 pb-2">
                                <div class="flex items-center">
                                    <div @click="step = 1" class="bg-redwood-500 text-2xl text-white text-center w-3/5 py-2.5 cursor-pointer">1</div>
                                    <div class="w-2/5 h-0.5	bg-redwood-500	"></div>
                                </div>
                                <div class="flex items-center">
                                    <div @click="step = 2" class=" text-2xl text-center w-3/5 py-2.5 cursor-pointer" x-bind:class="{'bg-iron-500 text-scarpa-flow-500':step < 2 ,'bg-redwood-500 text-white':step >= 2}">2</div>
                                    <div class="w-2/5 h-0.5	" x-bind:class="{'bg-iron-500':step < 2 ,'bg-redwood-500':step >= 2}"></div>
                                </div>

                                <div class="flex items-center">
                                    <div @click="step = 3" class=" text-2xl  text-center w-3/5 py-2.5 cursor-pointer" x-bind:class="{'bg-iron-500 text-scarpa-flow-500':step < 3 ,'bg-redwood-500 text-white':step >= 3}">3</div>
                                    <div class="w-2/5 h-0.5" x-bind:class="{'bg-iron-500':step < 3 ,'bg-redwood-500':step >= 3}"></div>
                                </div>
                                <div class="flex items-center">
                                    <div class=" text-2xl  text-center w-3/5 py-2.5 cursor-pointer" x-bind:class="{'bg-iron-500 text-scarpa-flow-500':step < 4 ,'bg-redwood-500 text-white':step >= 4}">4</div>

                                </div>

                            </div>
                            <!-- <button x-show="step > 1" @click="step--" class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button> -->
                        </div>

                        <div class="w-1/4 text-right">
                            <button x-show="step < 3" @click="step++" class="w-full	 focus:outline-none border border-transparent py-7 px-5  text-center text-redwood-500 italic bg-baige hover:bg-redwood-500 hover:text-baige text-4xl font-Eureka	">Next</button>

                            <button @click="step = '4'" x-show="step === 3" class="w-full focus:outline-none border border-transparent py-7 px-5  text-center text-redwood-500 italic bg-baige hover:bg-redwood-500 hover:text-baige text-4xl font-Eureka">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>


        <input type="checkbox" id="my-modal-4" class="modal-toggle">
        <label for="my-modal-4" class="modal cursor-pointer">
          <label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">Our Limitations</h3>
            <ul class="list-disc p-4"><li>Upon arrival, please show the host your confirmation message</li><li>After exceeding 20 mins grace period, your reservation will be moved to the waiting list</li><li>If specified per chosen date, down payments are required to secure your reservation</li><li>Kindly respect your reservation time. Two hours are given per table</li><li>OTTO has the right to cancel any reservation made if needed</li><li>24-hour prior notice is needed for cancelations</li><li>Bookings aren't eligible for cancelation if after a 24-hour notice</li><li>No external food or beverage is allowed</li><li>No Laptops allowed</li></ul>
          </label>
        </label>

        <script>
            function app() {
                return {
                    step: 1,


                }
            }
        </script>


    </div>


    @endsection