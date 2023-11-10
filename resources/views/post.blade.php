<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:50%">
            {{ __('Post') }}
        </h1>
    </x-slot>

    <div style="display: flex; flex-direction: column;">
        <div style="max-width: 50rem; margin: 0 auto; padding: 1rem 2rem;">
            <div style="background-color: #444; overflow: hidden; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); border-radius: 0.25rem; color: #fff; padding: 1rem; width:50rem;">
            <h1 style="font-weight: 600; font-size: 1.5rem;">Create Post</h1>
                <hr class="p-6 bg-gray-600">
                <div style="padding: 2rem;">
                    <form class="w-full max-w-sm" method="POST">
                        @csrf 
                        <div style="display: flex;  margin-bottom: 0.5rem;">
                                <div style="flex: 1;  align-items: center; color: white;  font-size:20px;">
                                    <label for="title">Title</label>
                                </div>
                                <div style="margin-right:480px;margin-top:-0.1rem; align-items: center;">
                                    <input style="align-items: center; border: 2px solid #ccc; border-radius: 0.25rem; width: 100%; padding: 0.5rem 1rem;" id="title" type="text" name="title">
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; margin-top: 2rem;">
                                <div style="flex: 1;  color: white;  font-size:20px;">
                                    <label for="body">Body</label>
                                </div>
                                <div style="flex: 2; margin-right:360px; margin-top:-0.1rem; width:20rem;">
                                    <textarea style="resize: vertical; border: 2px solid #ccc; border-radius: 0.25rem; width: 22rem;" name="body"></textarea>
                                </div>
                            </div>
                            <div class="md:flex md:items-center" style="margin-top:3rem">
                                <div class="md:w-1/3"></div>
                                <div class="md:w-2/3"> 
                                    <input type="submit" style="cursor:pointer; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); background-color: #34D399; transition: background-color 0.2s ease-in-out; outline: 0; text-decoration: none; color: #fff; font-weight: 700; padding: 0.5rem 1rem; border-radius: 0.375rem;"
                                    value="Post">
                                </div> 
                            </div>
                            
                        </form>
                        @if (session() -> has('status'))
                        <div style='margin-top: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #500; color: #fff; font-weight: bold; padding-top: 2px; padding-right: 4px; padding-bottom: 2px; padding-left: 4px; border-radius: 5px;'>
                        {{session('status')}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

 
    <!-- <div style="display: flex; flex-direction: column;">

        <div style="padding: 2rem 0;">
            <div style="max-width: 100%; margin: 0 auto; padding: 1rem 2rem;">

                <div style="background-color: #444; overflow: hidden; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); border-radius: 0.25rem; color: #fff; padding: 1rem;">
                    <h1 style="font-weight: 600; font-size: 1.5rem;">Create Post</h1>
                    <hr style="background-color: #666; height: 2px; margin: 1rem 0;">

                    <div style="padding: 2rem;">
                        <form style="max-width: 255px;" method="POST">
                            <input type="hidden" name="_token" value="your_csrf_token_here">

                            <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                                <div style="flex: 1; text-align: right; color: white; margin-right: 0.25rem; font-size:20px;">
                                    <label for="title">Title</label>
                                </div>
                                <div style="flex: 2;">
                                    <input style="border: 2px solid #ccc; border-radius: 0.25rem; width: 100%; padding: 0.5rem 1rem;" id="title" type="text" name="title">
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                                <div style="flex: 1; text-align: right; color: white; margin-right: 0.25rem; font-size:20px;">
                                    <label for="body">Body</label>
                                </div>
                                <div style="flex: 2;">
                                    <textarea style="resize: vertical; border: 2px solid #ccc; border-radius: 0.25rem; width: 100%;" name="body"></textarea>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <div style="flex: 1;"></div>
                                <div style="flex: 2;">
                                    <input type="submit" style="background-color: #00a86b; color: #fff; border: none; border-radius: 0.25rem; padding: 0.5rem 1rem; font-weight: 600; cursor: pointer; transition: background-color 0.2s ease;" value="Post">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div> -->





</x-app-layout>
