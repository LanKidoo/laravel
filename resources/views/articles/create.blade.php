
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required><br><br>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea><br><br>

    <label for="author">Author:</label>
    <input type="text" name="author" id="author" required><br><br>

    <button type="submit">Submit</button>
</form>
