@extends('_layouts.admin')
@section('main_content')
    <div class="lg:w-2/3 sm:flex justify-between block w-full mx-auto">
        <h2 class="my-auto ml-4 text-2xl font-bold text-white">Permissions</h2>
        <nav class="p-3 m-4 font-sans">
            <ol class="list-reset flex text-gray-200">
                <li><a href="{{ route('cad.portal') }}" class="link-blue">Portal</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('admin.portal') }}" class="link-blue">Admin</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('admin.permissions.index') }}" class="link-blue">Permissions</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Edit</li>
            </ol>
        </nav>
    </div>

    <div class="lg:w-2/3 md:flex-row container flex flex-col-reverse w-11/12 mx-auto">
        <div class="bg-cad-lighter w-full p-4 my-3 mr-2 rounded-lg">
            <div class="flex justify-between mb-3 border-b-4 border-gray-900 ">
                <h2 class="text-cad-normal text-2xl font-semibold">Edit Permission</h2>
            </div>

            <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <label class="block">
                    <span class="text-gray-200">Permission Title</span>
                    <input type="text" id="title" name="title" class="form-input block w-full mt-1"
                        value="{{ old('title', isset($permission) ? $permission->title : '') }}" required>
                </label>

                <div>
                    <input class="btn btn-green" type="submit" value="Save">
                </div>
            </form>

        </div>
    </div>
@endsection
