@extends('layouts.app')
@section('title', 'home')
@section('body')


    <div class="grid gap-5 lg:grid-cols-4 sm:max-w-sm sm:mx-auto lg:max-w-full ">
        <div class="overflow-hidden transition-shadow duration-300 shadow-md rounded">
            <a href="/" aria-label="Article"><img src="https://images.pexels.com/photos/932638/pexels-photo-932638.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" class="object-cover w-full h-64 rounded" alt="" /></a>
            <div class="py-5 px-2">
                <p class="mb-2 text-xs font-semibold text-gray-600 uppercase">
                13 Jul 2020
                </p>
                <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 md:hover:text-blue-700"><p class="text-xl font-bold leading-5 ">First blog item</p></a>
                <p class="mb-4 text-gray-700">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <a href="/" aria-label="Author" title="Author" class="mr-3">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="avatar" class="object-cover w-10 h-10 rounded-full shadow-sm" />
                        </a>
                        <div>
                        <a href="/" aria-label="Author" title="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-400">Vasile Melinte</a>
                        <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 mt-2">
                    <a href="/" aria-label="Comments" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
                        <div class="mr-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            stroke="currentColor"
                            class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
                        >
                            <polyline points="23 5 23 18 19 18 19 22 13 18 12 18" fill="none" stroke-miterlimit="10"></polyline>
                            <polygon points="19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
                        </svg>
                        </div>
                        <p class="font-semibold">81</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>

    <!-- component -->
    <div class="flex justify-center mt-8
    ">
        <ul class="flex items-center -mx-[6px]">
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base
                    hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                    <span>
                    <svg width="8" height="15" viewBox="0 0 8 15" class="fill-current stroke-current">
                        <path d="M7.12979 1.91389L7.1299 1.914L7.1344 1.90875C7.31476 1.69833 7.31528 1.36878 7.1047 1.15819C7.01062 1.06412 6.86296 1.00488 6.73613 1.00488C6.57736 1.00488 6.4537 1.07206 6.34569 1.18007L6.34564 1.18001L6.34229 1.18358L0.830207 7.06752C0.830152 7.06757 0.830098 7.06763 0.830043 7.06769C0.402311 7.52078 0.406126 8.26524 0.827473 8.73615L0.827439 8.73618L0.829982 8.73889L6.34248 14.6014L6.34243 14.6014L6.34569 14.6047C6.546 14.805 6.88221 14.8491 7.1047 14.6266C7.30447 14.4268 7.34883 14.0918 7.12833 13.8693L1.62078 8.01209C1.55579 7.93114 1.56859 7.82519 1.61408 7.7797L1.61413 7.77975L1.61729 7.77639L7.12979 1.91389Z" stroke-width="0.3"></path>
                    </svg>
                    </span>
                </a>
            </li>
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base
                    hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                1
                </a>
            </li>
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base
                    hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                2
                </a>
            </li>
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base
                    hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                3
                </a>
            </li>
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base
                    hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                4
                </a>
            </li>
            <li class="px-[6px]">
                <a href="javascript:void(0)" class="
                    w-9
                    h-9
                    flex
                    items-center
                    justify-center
                    rounded-md
                    border border-gray-300
                    text-[#838995] text-base  hover:bg-blue-600 hover:border-primary hover:text-white
                    ">
                    <span>
                    <svg width="8" height="15" viewBox="0 0 8 15" class="fill-current stroke-current">
                        <path d="M0.870212 13.0861L0.870097 13.086L0.865602 13.0912C0.685237 13.3017 0.684716 13.6312 0.895299 13.8418C0.989374 13.9359 1.13704 13.9951 1.26387 13.9951C1.42264 13.9951 1.5463 13.9279 1.65431 13.8199L1.65436 13.82L1.65771 13.8164L7.16979 7.93248C7.16985 7.93243 7.1699 7.93237 7.16996 7.93231C7.59769 7.47923 7.59387 6.73477 7.17253 6.26385L7.17256 6.26382L7.17002 6.26111L1.65752 0.398611L1.65757 0.398563L1.65431 0.395299C1.454 0.194997 1.11779 0.150934 0.895299 0.373424C0.695526 0.573197 0.651169 0.908167 0.871667 1.13067L6.37922 6.98791C6.4442 7.06886 6.43141 7.17481 6.38592 7.2203L6.38587 7.22025L6.38271 7.22361L0.870212 13.0861Z" stroke-width="0.3"></path>
                    </svg>
                    </span>
                </a>
            </li>
        </ul>
    </div>

   
@endsection