<x-musu.admin>

    <?php if(!$category){$category = [];} ?>
    <?php if(!$products){$products = [];} ?>

    <h1 class="text-3xl font-bold special-h1 normal-h1 text-center">{{ $category->name }}</h1>

    <div class="create-task mt-6 flex justify-center items-center ">
        <a href="#" data-toggle="modal" data-target="#ModalCreate" class="create-button bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Add</a>
    </div>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-indigo-600 text-white">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Brand</th>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Price</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($products as $product)
                @if($product->category == $category->name)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->brand }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

    @include('plaukti.modal.add')

</x-musu.admin>
