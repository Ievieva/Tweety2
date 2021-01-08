<div class="border border-info rounded-xl p-3 mb-3">
    <form action="/tweets" method="post">
        @csrf
        <textarea  placeholder="What's up doc?" name="body" class="w-100 form-control"></textarea>
        <hr class="my-2">
        <footer class="d-flex justify-content-between align-items-center">
            <img
                class="rounded-circle"
                width="40"
                height="40"
                src="{{ current_user()->avatar}}"
                alt="{{ current_user()->name }}">

            <button
                type="submit"
                class="bg-info rounded-pill shadow py-1 px-3 text-white font-weight-bold"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>

    @error('body')
    <p class="pt-2 text-danger text-sm-left">{{ $message }}</p>
    @enderror
</div>
