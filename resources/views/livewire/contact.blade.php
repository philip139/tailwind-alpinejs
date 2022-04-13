@extends('layouts.app')
@section('title', 'contact')
@section('body')

<div class="flex justify-center">
    <div>
      <div class="form-check">
        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
          Default checkbox
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>
    </div>
  </div>
<div class="rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 flex justify-center p-8">
    <form
        x-data="{
            users: [],
            deleteUsers (){
                console.log(this.users)
            },
        }"
        x-on:submit.prevent="deleteUsers"
    class="w-full max-w-sm" >
        <div class="md:flex md:items-center mb-4 ">
            <div class="form-check">
                <input type="checkbox"  x-model="users" value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="check-one"/> 
                <label class="form-check-label inline-block text-gray-800" for="check-one">
                philip
                </label>
            </div>
            
        </div>
        <input type="checkbox"  x-model="users" value="2" /> philip2
        <input type="checkbox"  x-model="users" value="3" /> philip3
        <button class="btn  px-5 bg-green-500 bordered rounded-xl" type="submit" >delete</button>
    </form>
    <div x-data="{ records: [] }">
        <input type="checkbox"  x-model="records" value="1" /> philip3
        <input type="checkbox"  x-model="records" value="2" /> philip3
        <input type="checkbox"  x-model="records" value="3" /> philip3
        <div x-text="records"></div>
    </div>
    <div x-data="{plan: ''}">
        <select x-model="plan">
            <option value="">select option</option>
            <option value="first2">first</option>
            <option value="second2">second</option>
        </select>
        <span x-show="plan" x-text="`you have chosen the ${plan} plan`"></span>
    </div>
    
    <div x-data="{ fruits: ['apple', 'Mango', 'banana', 'orange']}">
        
        <template x-for="fruit, index in fruits">
            <div x-text="(index+1) +'. ' + fruit"></div>

        </template>
    </div>

    <div 
        x-data="{ 
            persons : [
                {id:1 , name: 'philip', point : 5},
                {id:2 , name: 'Mark', point : 50},
                {id:3 , name: 'Mario', point : 70}
                ]
            }"
    >
        <template x-for="person in persons">
            <div>
                <span x-text="person.name"></span>
                (<span x-text="person.point"></span>)
                <button class="btn py-2 "></button>
            </div>
        </template>
    </div>

</div>

@endsection