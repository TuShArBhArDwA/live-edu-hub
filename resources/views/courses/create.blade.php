<x-app-layout>
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Course Title" required><br>
        <textarea name="description" placeholder="Course Description" required></textarea><br>
        <input type="text" name="category" placeholder="Category"><br>
        <button type="submit">Create Course</button>
    </form>
</x-app-layout>
