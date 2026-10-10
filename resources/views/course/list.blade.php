
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>

    <nav>
        <a href="/students">Students</a> |
        <a href="/courses">Courses</a>
    </nav>

    <hr>

    <h1>Course List</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        <br>
    @endif

    <a href="/course/create">+ Create New Course</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>

                    <td>{{ $course->name }}</td>

                    <td>{{ $course->duration }} weeks</td>

                    <td>{{ $course->fee }}</td>

                    <td>{{ $course->difficulty }}</td>

                    <td>
                        {{ $course->is_active ? 'Yes' : 'No' }}
                    </td>

                    <td>
                        <a href="/courses/{{ $course->id }}">
                            View
                        </a>

                        |

                        <a href="/courses/{{ $course->id }}/edit">
                            Edit
                        </a>

                        |

                        <form
                            method="POST"
                            action="/courses/{{ $course->id }}"
                            style="display: inline;"
                            onsubmit="return confirm('Are you sure you want to delete this course?');"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        No courses found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>

