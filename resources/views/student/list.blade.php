
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <nav>
        <a href="/students">Students</a> |
        <a href="/courses">Courses</a>
    </nav>

    <hr>

    <h1>Student List</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        <br>
    @endif

    <a href="/student/create">+ Create New Student</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>

                    <td>{{ $student->name }}</td>

                    <td>{{ $student->email }}</td>

                    <td>{{ $student->phone }}</td>

                    <td>
                        <a href="/students/{{ $student->id }}">
                            View
                        </a>

                        |

                        <a href="/students/{{ $student->id }}/edit">
                            Edit
                        </a>

                        |

                        <form
                            method="POST"
                            action="/students/{{ $student->id }}"
                            style="display: inline;"
                            onsubmit="return confirm('Are you sure you want to delete this student?');"
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
                    <td colspan="5">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>

