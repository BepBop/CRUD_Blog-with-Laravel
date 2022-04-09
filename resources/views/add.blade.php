<x-app-layout>

    <x-slot name="header"></x-slot>

    <div style="display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    font-size: xx-large;
    background: white;
    width: auto;
    height: 100vh;
    ">
        <form method="POST" action="/dashboard/add">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            </div>
            <br>
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label for="excerpt">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" placeholder="Excerpt of the post" required></textarea>
            </div>
            <br>
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" cols="25" placeholder="Post" required></textarea>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">&#8203 Submit</button>
                <a href="/dashboard">&#x200B &#8203 &#8203 &#8203 &#8203 &#8203 &#8203 &#8203 &#8203 Back</a>
            </div>
        </form>
    </div>


</x-app-layout>

