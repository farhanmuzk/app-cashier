<div class="flex p-4">
    <a href="javascript:history.back()">
        <div class="m-4 bg-transparent rounded-full p-2">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.7071 4.29289C16.0976 4.68342 16.0976 5.31658 15.7071 5.70711L9.41421 12L15.7071 18.2929C16.0976 18.6834 16.0976 19.3166 15.7071 19.7071C15.3166 20.0976 14.6834 20.0976 14.2929 19.7071L7.29289 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.29289 11.2929L14.2929 4.29289C14.6834 3.90237 15.3166 3.90237 15.7071 4.29289Z"
                    fill="#4B5563" />
            </svg>
        </div>
    </a>
    <div class="mt-5">
        <h1 class="text-3xl font-semibold">{{ $title }}</h1>
        <h3 class="text-lg mt-2">
            {{ $subtitle }}
            <a href="{{ $link }}" class="text-primary font-bold underline decoration-1">{{ $linkText }}</a>
        </h3>
    </div>
</div>
