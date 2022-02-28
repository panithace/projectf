@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
       <img src="{{ $comment->user->profile->profileImage() }}" alt="" width="60" height="60">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->user->username }}</h3>

            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at }}</time>
            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>
    </div>