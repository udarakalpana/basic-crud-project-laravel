<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
        <form action="{{route('create')}}" method="post">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Title</label>
                    <input type="text" name="post_title" id="post_title" class="input-field" placeholder="Post Title">
                </div>
                <div class="sm:col-span-2">
                    <label for="post_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Content</label>
                    <textarea id="post_content" name="post_content" rows="8" class="text-area" placeholder="Write post..."></textarea>
                </div>
            </div>
            <button type="submit" class="dark-btn">Create Post</button>
        </form>
    </div>
</section>
</body>
</html>
