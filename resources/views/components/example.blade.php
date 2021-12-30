<div class="grid grid-cols-2 items-center justify-around">


    <div class="col-span-1 px-2 w-full">
        <img src="{{ asset($image ?? 'img/example.jpg') }}" class="object-cover w-full md:h-80 h-32 shadow rounded-xl">
        <p class="my-2">
            <span class="font-bold">Original</span>
            <span class="text-gray-500 md:inline-block block">({{$size ?? '1.5Mb'}})</span>
        </p>
    </div>
  
    <div class="col-span-1 px-2 w-full">
        <img src="{{ asset($image2 ?? 'img/example.jpg') }}" class="object-cover w-full md:h-80 h-32 shadow rounded-xl">
        <p class="my-2">
            <span class="font-bold">Compressed</span>
            <span class="text-gray-500 md:inline-block block">({{ $size2 ?? '155Kb'}})</span>
        </p>
    </div>
</div>
<br>
<br>
