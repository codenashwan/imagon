<div class="p-3 my-5">

    <p class="font-bold text-4xl my-5">Get started</p>
    @component('components.code', [
    'title' => 'Just Compress',
    'details' => 'if you want to compress your image, <br>just upload your image and we will compress them for you.',
    'code' => '/api/upload'])
    @endcomponent
    @component('components.example')
    @endcomponent

    <hr>

    @component('components.code', [
    'title' => 'Compress With Quality',
    'details' => 'if you want to compress your image with quality<br> add <code
        class="bg-zinc-300 rounded px-2">?quality=</code> parameter to your url min quality is 0 and max quality is
    100<br> by default quality is 40.',
    'code' => '/api/upload?quality=10'])
    @endcomponent


    @component('components.example',[
        'image' => 'img/quality.jpg',
        'size' => '1.72Mb',
        'image2' => 'img/quality2.jpg',
        'size2' => '58.1Kb'
    ])
    @endcomponent
    <hr>
    @component('components.code', [
    'title' => 'Compress With Blur',
    'details' => 'if you want to compress your image with blur<br> add <code
        class="bg-zinc-300 rounded px-2">?blur=</code> parameter to your url<br> min value is 0 and max quality is 100',
    'code' => '/api/upload?blur=50'])
    @endcomponent
    @component('components.example',[
        'image' => 'img/blur.jpg',
        'size' => '1.72Mb',
        'image2' => 'img/blur2.jpg',
        'size2' => '58.1Kb'
    ])
    @endcomponent
    <hr>

    @component('components.code', [
    'title' => 'Compress With Brightness',
    'details' => 'if you want to compress your image with brightness<br> add <code
        class="bg-zinc-300 rounded px-2">?brightness=</code> parameter to your url<br> min value is -100 and max quality
    is 100',
    'code' => '/api/upload?brightness=30'])
    @endcomponent
    @component('components.example',[
        'image' => 'img/brightness.jpg',
        'size' => '1.72Mb',
        'image2' => 'img/brightness2.jpg',
        'size2' => '58.1Kb'
    ])
    @endcomponent
    <hr>

    
    @component('components.code', [
    'title' => 'Compress With Crop',
    'details' => 'if you want to compress your image with crop<br> add <code
        class="bg-zinc-300 rounded px-2">?crop=</code> parameter to your url<br> you need add width and height image
    like <code class="bg-zinc-300 rounded px-2">crop=100x100</code>',
    'code' => '/api/upload?crop=200x200'])
    @endcomponent

    
    @component('components.code', [
    'title' => 'Compress With Fit',
    'details' => 'if you want to compress your image with fit<br> add <code
        class="bg-zinc-300 rounded px-2">?fit=</code> parameter to your url<br> you need add width and height image like
    <code class="bg-zinc-300 rounded px-2">fit=100x100</code>',
    'code' => '/api/upload?fit=300x200'])
    @endcomponent

    @component('components.code', [
    'title' => 'Compress With URL',
    'details' => 'if you want just return URL result of image compress<br> add <code
        class="bg-zinc-300 rounded px-2">?url=</code> parameter to your url',
    'code' => '/api/upload?url=true'])
    @endcomponent


    @component('components.code', [
    'title' => 'Compress With All parameters',
    'details' => 'if you want use all parameters',
    'code' => '/api/upload?fit?300x200&url=true&quality=40&blur=50&brightness=30'])
    @endcomponent
</div>
