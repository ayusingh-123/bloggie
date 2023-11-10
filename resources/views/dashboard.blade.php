<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div style="padding:0rem;">
    @if (session() -> has('status'))
                        <div style='margin-top: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #500; color: #fff; padding-top: 2px; padding-right: 4px; padding-bottom: 2px; padding-left: 4px; border-radius: 5px;'>
                        {{session('status')}}
                        </div>
                        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- @foreach ($posts as $post)
                    {{$post->title}}
                    {{$post->body}}
                    <br>
                    @endforeach -->
                    <!-- <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-400">
                                        <thead class="bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                                    Title 
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                                    Body
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-600 text-white divide-y divide-gray-500">
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Ayush</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{$post->title}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{$post->body}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="" class="bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Edit</a>
                                                        <a href="" class="bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Delete</a>
                                                    </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   </div> -->
                   <div style="display: flex; flex-direction: column;">
        <div style="margin: -0.5rem 0;">
            <div style="overflow-x: auto; margin: 0 -0.375rem;">
                <div style="padding: 0.5rem; display: inline-block; min-width: 100%; padding: 1.5rem 2rem;">
                    <div style="box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); border: 1px solid #ccc; border-radius: 0.25rem; overflow: hidden;">
                        <table style="min-width: 100%; border-collapse: separate; border-spacing: 0; border: 1px solid #666;">
                            <thead style="background-color: #444;">
                                <tr>
                                    <th style="padding: 0.75rem 1.5rem; text-align: left; font-size: 0.75rem; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 0.05em;">Name</th>
                                    <th style="padding: 0.75rem 1.5rem; text-align: left; font-size: 0.75rem; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 0.05em;">Title</th>
                                    <th style="padding: 0.75rem 1.5rem; text-align: left; font-size: 0.75rem; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 0.05em;">Body</th>
                                    <th style="padding: 0.75rem 1.5rem; text-align: left; font-size: 0.75rem; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 0.05em;">Actions</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #333; color: #fff;">
                                @foreach ($posts as $post)
                                <tr>
                                    <td style="padding: 1rem 1.5rem; white-space: nowrap;">{{$post->user->name}}</td>
                                    <td style="padding: 1rem 1.5rem; white-space: nowrap;">{{$post->title}}</td>
                                    <td style="padding: 1rem 1.5rem; white-space: nowrap;">{{$post->body}}</td>
                                    <td style="padding: 0.5rem 1rem; white-space: nowrap; font-size: 0.75rem; font-weight: 600;">
                                        <a href="{{url('/post/edit',$post->id)}}" style="background-color: #800080; color: #fff; border: none; border-radius: 0.25rem; padding: 0.25rem 0.5rem; text-decoration: none; font-size: 0.75rem; cursor: pointer; transition: background-color 0.2s ease;">Edit</a>
                                        <a href="{{url('/post/delete',$post->id)}}" style="background-color: red; color: #fff; border: none; border-radius: 0.25rem; padding: 0.25rem 0.5rem; text-decoration: none; font-size: 0.75rem; cursor: pointer; transition: background-color 0.2s ease;">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
