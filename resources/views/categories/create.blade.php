<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="/categories" method="POST">
                    @csrf
                    <div class="name">
                        <h2>カテゴリー名を入力して下さい</h2>
                        <input type="text" name="category[name]" placeholder="カテゴリー"/>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="store"/>
                    </div>
                </form>
            </div>
            <div class="footer my-3">
                <a type="back" href="/categories">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>