@extends('layouts.app') @section('title', 'home') @section('body')

<div class="mt-100 ">
    <div class="">
        <style>
            [x-cloak] {
                display: none;
            }
        </style>
        <div x-data="app()" x-cloak>
            <div class=" w-full py-10">

                <div x-show.transition="step === '4'">
                    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                        <div>
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Payment</h2>



                        </div>
                    </div>
                </div>

                <div x-show.transition="step != '4'">
                    <!-- Step Content -->
                    <div class="py-10">
                        <div x-show.transition.in="step === 1">
                            form 1 here
                        </div>
                        <div x-show.transition.in="step === 2">

                            form 2 here

                        </div>
                        <div x-show.transition.in="step === 3">
                            form 3 here
                        </div>
                    </div>
                    <!-- / Step Content -->
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0  bg-white shadow-topshadow" x-show="step != '4'">
                <div class="mx-auto">
                    <div class="flex justify-between">
                        <div class="w-3/4 pl-24">
                            <div class="grid grid-cols-4 pt-6 pb-2">
                                <div class="flex items-center">
                                    <div class="bg-redwood-500 text-2xl	text-white text-center w-3/5 py-2.5	">1</div>
                                    <div class="w-2/5 h-0.5	bg-redwood-500	"></div>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-iron-500 text-2xl text-scarpa-flow-500 text-center w-3/5 py-2.5 cursor-pointer">2</div>
                                    <div class="w-2/5 h-0.5	bg-iron-500"></div>
                                </div>

                                <div class="flex items-center">
                                    <div class="bg-iron-500 text-2xl text-scarpa-flow-500 text-center w-3/5 py-2.5 cursor-pointer">3</div>
                                    <div class="w-2/5 h-0.5	bg-iron-500	"></div>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-iron-500 text-2xl text-scarpa-flow-500 text-center w-3/5 py-2.5 cursor-pointer">4</div>

                                </div>

                            </div>
                            <!-- <button x-show="step > 1" @click="step--" class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button> -->
                        </div>

                        <div class="w-1/4 text-right">
                            <button x-show="step < 3" @click="step++" class="w-full	 focus:outline-none border border-transparent py-7 px-5  text-center text-redwood-500 italic bg-baige hover:bg-redwood-500 hover:text-baige text-4xl font-sans	">Next</button>

                            <button @click="step = '4'" x-show="step === 3" class="w-full focus:outline-none border border-transparent py-7 px-5  text-center text-redwood-500 italic bg-baige hover:bg-redwood-500 hover:text-baige text-4xl font-sans">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>

        <script>
            function app() {
                return {
                    step: 1,


                }
            }
        </script>


    </div>


    @endsection