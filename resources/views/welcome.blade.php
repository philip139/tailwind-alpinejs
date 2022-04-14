@extends('layouts.app') @section('title', 'home') @section('body')

<div class="mt-100 flex" style="min-height: 500px;">
    <div class="px-3 column w-full sm:w-1/2">
        <form id="step_1" class="form">
            <div class="relative mb-12">
                <select id="branch" class="appearance-none form_input" name="branch" required="required" x-data="{ destinations: [
                {id: 'cairo', label: 'OTTO Cairo'},
                {id: 'giza', label: 'OTTO Giza'},
                {id: 'alex', label: 'OTTO Alex'},
                ]}">
                    <option value="">
                        Choose A Destination
                    </option>
                    <template x-for="destination in destinations">
                        <option :value="destination.id" x-text="destination.label"></option>
                    </template>
                </select>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="max-h-4 absolute top-6 right-8"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"class=""></path></svg>
            </div>
            <div class="relative mb-12">
                <select id="branch" name="branch" required="required" class="appearance-none is-fullwidth is-cash form_input" x-data="{ seats: [1,2,3,4,5,6,7,8,9,10]}">
                    <option value="">
                      Number Of Seats
                    </option>
                    <template x-for="seat in seats">
                        <option :value="seat" x-text="seat+' Seats'"></option>
                    </template>
                </select> 
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="max-h-4 absolute top-6 right-8"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" class=""></path></svg>              
            </div>
            <div class="accept relative flex w-full">
                <input id="accept" value="accept" type="checkbox" name="payment" required="required" class="styled-checkbox invisible w-0">
                <label for="accept" class="w-full flex checkbox border-0" data-v-668beab6="">I accept <strong>Our Limitations</strong>
                </label>
            </div>
        </form>
    </div>
    <div class="px-3 w-1/2 hidden sm:flex ">
        <img src="https://api.eatery-eg.com/uploads/1621862955-926668611.jpg" class="mb-100 is-fullwidth">
    </div>
</div>


@endsection