@extends('viewDok.Main')
@section('container')
<div class=" h-screen bg-gray-100 flex items-center justify-center gap-10 ">
    <div class=" bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg overflow-hidden ">
        <img src="./img/aviter3.jpg" alt="" class=" w-full h-full object-cover ">
        <div class=" p-5 flex flex-col gap-3 ">
            <!-- badge -->
            <div class=" flex items-center gap-2 ">
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">Stock ready</span>
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">official store</span>
            </div>
            <!-- product title -->
            <h2 class=" font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap ">
                Aviter
            </h2>
            <!-- product price -->
            <div>
                <span class=" text-xl font-bold  ">
                    Rp. 400.000
                </span>
                <div class=" flex items-centerr gap-2 mt-1 ">
                    <span class=" text-sm line-through opacity-50">
                        Rp 500.000
                    </span>
                    <span class=" bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white   ">
                        Save 20%
                    </span>
                </div>
            </div>
            <!-- product rating -->
            <span class=" flex items-center mt-1 ">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star-half-fill.svg" alt="">
                <img src="./img/star-no-fill.svg" alt="">
                <span class=" text-xs ml-2 text-gray-500">
                    20k riviews 
                </span>
            </span>
            <!-- product action button -->
            <div class=" mt-5 flex gap-2 ">
                <button class=" bg-yellow-500/80 hover:bg-yellow-500/90 px-6 py-2 rounded-md text-white font-medium tracking-wider transition ">
                    Add to Cart
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/love.svg" class="opacity-50 " alt=""/>
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/eye.svg" class="opacity-50 " alt=""/>
                </button>
            </div>
        </div>
    </div>  
    <div class=" bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg overflow-hidden ">
        <img src="./img/paracetamol.png" alt="" class=" w-full h-full object-cover ">
        <div class=" p-5 flex flex-col gap-3 ">
            <!-- badge -->
            <div class=" flex items-center gap-2 ">
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">Stock ready</span>
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">official store</span>
            </div>
            <!-- product title -->
            <h2 class=" font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap ">
                paracetamol
            </h2>
            <!-- product price -->
            <div>
                <span class=" text-xl font-bold  ">
                    Rp. 400.000
                </span>
                <div class=" flex items-centerr gap-2 mt-1 ">
                    <span class=" text-sm line-through opacity-50">
                        Rp 500.000
                    </span>
                    <span class=" bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white   ">
                        Save 20%
                    </span>
                </div>
            </div>
            <!-- product rating -->
            <span class=" flex items-center mt-1 ">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star-half-fill.svg" alt="">
                <img src="./img/star-no-fill.svg" alt="">
                <span class=" text-xs ml-2 text-gray-500">
                    20k riviews 
                </span>
            </span>
            <!-- product action button -->
            <div class=" mt-5 flex gap-2 ">
                <button class=" bg-yellow-500/80 hover:bg-yellow-500/90 px-6 py-2 rounded-md text-white font-medium tracking-wider transition ">
                    Add to Cart
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/love.svg" class="opacity-50 " alt=""/>
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/eye.svg" class="opacity-50 " alt=""/>
                </button>
            </div>
        </div>
    </div>  
    <div class=" bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg overflow-hidden ">
        <img src="./img/bodrex3.jpg" alt="" class=" w-full h-full object-cover ">
        <div class=" p-5 flex flex-col gap-3 ">
            <!-- badge -->
            <div class=" flex items-center gap-2 ">
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">Stock ready</span>
                <span class=" px-3 py-1 rounded-full text-xs bg-gray-100 ">official store</span>
            </div>
            <!-- product title -->
            <h2 class=" font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap ">
                Bodrex
            </h2>
            <!-- product price -->
            <div>
                <span class=" text-xl font-bold  ">
                    Rp. 400.000
                </span>
                <div class=" flex items-centerr gap-2 mt-1 ">
                    <span class=" text-sm line-through opacity-50">
                        Rp 500.000
                    </span>
                    <span class=" bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white   ">
                        Save 20%
                    </span>
                </div>
            </div>
            <!-- product rating -->
            <span class=" flex items-center mt-1 ">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star.svg" alt="">
                <img src="./img/star-half-fill.svg" alt="">
                <img src="./img/star-no-fill.svg" alt="">
                <span class=" text-xs ml-2 text-gray-500">
                    20k riviews 
                </span>
            </span>
            <!-- product action button -->
            <div class=" mt-5 flex gap-2 ">
                <button class=" bg-yellow-500/80 hover:bg-yellow-500/90 px-6 py-2 rounded-md text-white font-medium tracking-wider transition ">
                    Add to Cart
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/love.svg" class="opacity-50 " alt=""/>
                </button>
                <button class=" flex-grow flex justify-center items-center bg-gray-300/80 transition rounded-md ">
                    <img src="./img/eye.svg" class="opacity-50 " alt=""/>
                </button>
            </div>
        </div>
    </div>  
</div>
@endsection