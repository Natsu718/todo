<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class='categories'>
                    <div class='category'>
                        <h3>カテゴリー一覧</h3>
                        <div class="my-3">
                            <a type=create href='/categories/create'> カテゴリーを新規作成</a>
                        </div>
                        @foreach ($categories as $category)
                            <div class='category'>
                                <table class="table-fixed">
                                    <tr>
                                        <th width="200" height="70" align="left">
                                            ▶{{ $category->name }}
                                        </th>
                                        <td>
                                            <form action="/categories/{{ $category->id }}" id="form_{{ $category->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="delete" onclick="deletePost({{ $category->id }})">delete</button> 
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>