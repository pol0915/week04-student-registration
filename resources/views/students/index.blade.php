<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Records | CIT Enrollment Desk</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Manrope', 'sans-serif'],
                    },

                    colors: {
                        ink: '#171A1F',
                        paper: '#F5F4EF',
                        lime: '#C7F36B',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background:
                radial-gradient(
                    circle at 12% 5%,
                    rgba(199, 243, 107, 0.13),
                    transparent 28%
                ),
                #F5F4EF;
        }

        .student-row {
            transition:
                transform .18s ease,
                background-color .18s ease;
        }

        .student-row:hover {
            background-color: #FAFAF7;
        }
    </style>
</head>

<body class="font-sans text-ink antialiased">

<div class="min-h-screen">

    {{-- HEADER --}}
    <header class="border-b border-black/10 bg-paper/90 backdrop-blur">

        <div class="mx-auto flex max-w-[1500px] items-center justify-between px-5 py-4 sm:px-8 lg:px-10">

            <a
                href="{{ route('students.create') }}"
                class="flex items-center gap-3"
            >
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-ink text-white">

                    <span class="font-display text-sm font-extrabold">
                        CIT
                    </span>

                </div>

                <div>
                    <p class="font-display text-sm font-bold leading-tight">
                        Enrollment Desk
                    </p>

                    <p class="text-xs text-gray-500">
                        Student Registration System
                    </p>
                </div>
            </a>

            <a
                href="{{ route('students.create') }}"
                class="inline-flex items-center gap-2 rounded-full bg-ink px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-black"
            >

                Register Student

                <svg
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M12 5v14"/>
                    <path d="M5 12h14"/>
                </svg>

            </a>

        </div>

    </header>

    {{-- MAIN --}}
    <main class="mx-auto max-w-[1500px] px-5 py-8 sm:px-8 lg:px-10 lg:py-10">

        {{-- PAGE HEADER --}}
        <div class="mb-8 flex flex-col justify-between gap-5 lg:flex-row lg:items-end">

            <div>

                <p class="mb-2 text-xs font-bold uppercase tracking-[0.22em] text-gray-400">
                    Student Directory
                </p>

                <h1 class="font-display text-3xl font-extrabold tracking-tight sm:text-4xl">
                    Registration Records
                </h1>

                <p class="mt-3 max-w-xl text-sm leading-6 text-gray-500">
                    Review registered student information stored in the system database.
                </p>

            </div>

            <div class="flex items-center gap-3">

                <div class="rounded-full border border-black/10 bg-white px-4 py-2.5">

                    <p class="text-xs font-semibold text-gray-500">
                        Total Students
                    </p>

                    <p class="font-display text-lg font-extrabold">
                        {{ $students->count() }}
                    </p>

                </div>

            </div>

        </div>

        {{-- MAIN CARD --}}
        <div class="overflow-hidden rounded-[28px] border border-black/10 bg-white shadow-[0_30px_80px_rgba(23,26,31,0.07)]">

            {{-- CARD HEADER --}}
            <div class="flex flex-col justify-between gap-4 border-b border-black/10 px-6 py-5 sm:flex-row sm:items-center lg:px-8">

                <div>
                    <h2 class="font-display text-lg font-bold">
                        Registered Students
                    </h2>

                    <p class="mt-1 text-xs text-gray-400">
                        Latest registrations are shown first.
                    </p>
                </div>

                {{-- CLIENT SEARCH --}}
                <div class="relative w-full sm:w-72">

                    <svg
                        class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-3.5-3.5"/>
                    </svg>

                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search student..."
                        class="w-full rounded-full border border-black/10 bg-[#F8F8F5] py-2.5 pl-11 pr-4 text-sm outline-none transition focus:border-black/30 focus:bg-white"
                    >

                </div>

            </div>

            @if ($students->isEmpty())

                {{-- EMPTY STATE --}}
                <div class="flex min-h-[430px] flex-col items-center justify-center px-6 py-14 text-center">

                    <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-[#F3F4F0]">

                        <svg
                            class="h-7 w-7 text-gray-400"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21a8 8 0 0 1 16 0"/>
                            <path d="M18 5v6"/>
                            <path d="M15 8h6"/>
                        </svg>

                    </div>

                    <h3 class="font-display text-xl font-bold">
                        No students registered yet
                    </h3>

                    <p class="mt-2 max-w-md text-sm leading-6 text-gray-500">
                        Student records will appear here after a successful registration.
                    </p>

                    <a
                        href="{{ route('students.create') }}"
                        class="mt-6 inline-flex items-center gap-2 rounded-full bg-ink px-6 py-3 text-sm font-bold text-white transition hover:bg-black"
                    >
                        Register First Student

                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M12 5v14"/>
                            <path d="M5 12h14"/>
                        </svg>

                    </a>

                </div>

            @else

                {{-- DESKTOP TABLE --}}
                <div class="hidden overflow-x-auto md:block">

                    <table class="w-full">

                        <thead>

                        <tr class="border-b border-black/10 bg-[#FAFAF7] text-left">

                            <th class="px-8 py-4 text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Student
                            </th>

                            <th class="px-5 py-4 text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Student ID
                            </th>

                            <th class="px-5 py-4 text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Program
                            </th>

                            <th class="px-5 py-4 text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Year
                            </th>

                            <th class="px-5 py-4 text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Contact
                            </th>

                            <th class="px-8 py-4 text-right text-[11px] font-bold uppercase tracking-[0.14em] text-gray-400">
                                Action
                            </th>

                        </tr>

                        </thead>

                        <tbody id="studentTable">

                        @foreach ($students as $student)

                            <tr
                                class="student-row border-b border-black/5 last:border-b-0"
                                data-search="{{ strtolower(
                                    $student->first_name . ' ' .
                                    $student->middle_name . ' ' .
                                    $student->last_name . ' ' .
                                    $student->student_id . ' ' .
                                    $student->email . ' ' .
                                    $student->program
                                ) }}"
                            >

                                {{-- STUDENT --}}
                                <td class="px-8 py-5">

                                    <div class="flex items-center gap-4">

                                        <img
                                            src="{{ asset('storage/' . $student->profile_picture) }}"
                                            alt="{{ $student->first_name }}"
                                            class="h-12 w-12 rounded-xl object-cover ring-1 ring-black/5"
                                        >

                                        <div>

                                            <p class="font-semibold">
                                                {{ $student->first_name }}
                                                {{ $student->middle_name ? substr($student->middle_name, 0, 1) . '.' : '' }}
                                                {{ $student->last_name }}
                                            </p>

                                            <p class="mt-1 text-xs text-gray-400">
                                                Registered {{ $student->created_at->format('M d, Y') }}
                                            </p>

                                        </div>

                                    </div>

                                </td>

                                {{-- ID --}}
                                <td class="px-5 py-5">

                                    <span class="rounded-full bg-[#F2F3EF] px-3 py-1.5 font-mono text-xs font-semibold">
                                        {{ $student->student_id }}
                                    </span>

                                </td>

                                {{-- PROGRAM --}}
                                <td class="max-w-[250px] px-5 py-5">

                                    <p class="text-sm font-medium leading-5">
                                        {{ $student->program }}
                                    </p>

                                </td>

                                {{-- YEAR --}}
                                <td class="px-5 py-5">

                                    <span class="text-sm font-semibold">
                                        {{ $student->year_level }}
                                    </span>

                                </td>

                                {{-- CONTACT --}}
                                <td class="px-5 py-5">

                                    <p class="text-sm font-medium">
                                        {{ $student->email }}
                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        {{ $student->mobile_number }}
                                    </p>

                                </td>

                                {{-- ACTION --}}
                                <td class="px-8 py-5 text-right">

                                    <a
                                        href="{{ route('students.show', $student) }}"
                                        class="inline-flex items-center gap-2 rounded-full border border-black/10 px-4 py-2 text-xs font-bold transition hover:bg-ink hover:text-white"
                                    >
                                        View Profile

                                        <svg
                                            class="h-3.5 w-3.5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path d="M5 12h14"/>
                                            <path d="m13 6 6 6-6 6"/>
                                        </svg>

                                    </a>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

                {{-- MOBILE CARDS --}}
                <div
                    id="mobileStudentList"
                    class="divide-y divide-black/5 md:hidden"
                >

                    @foreach ($students as $student)

                        <div
                            class="student-mobile-card p-5"
                            data-search="{{ strtolower(
                                $student->first_name . ' ' .
                                $student->middle_name . ' ' .
                                $student->last_name . ' ' .
                                $student->student_id . ' ' .
                                $student->email . ' ' .
                                $student->program
                            ) }}"
                        >

                            <div class="flex items-start gap-4">

                                <img
                                    src="{{ asset('storage/' . $student->profile_picture) }}"
                                    alt="{{ $student->first_name }}"
                                    class="h-14 w-14 rounded-2xl object-cover"
                                >

                                <div class="min-w-0 flex-1">

                                    <p class="font-display font-bold">
                                        {{ $student->first_name }}
                                        {{ $student->middle_name ? substr($student->middle_name, 0, 1) . '.' : '' }}
                                        {{ $student->last_name }}
                                    </p>

                                    <p class="mt-1 font-mono text-xs text-gray-400">
                                        {{ $student->student_id }}
                                    </p>

                                </div>

                            </div>

                            <div class="mt-5 grid grid-cols-2 gap-4 rounded-2xl bg-[#F8F8F5] p-4">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400">
                                        Year Level
                                    </p>

                                    <p class="mt-1 text-sm font-semibold">
                                        {{ $student->year_level }}
                                    </p>

                                </div>

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400">
                                        Registered
                                    </p>

                                    <p class="mt-1 text-sm font-semibold">
                                        {{ $student->created_at->format('M d, Y') }}
                                    </p>

                                </div>

                                <div class="col-span-2">

                                    <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400">
                                        Program
                                    </p>

                                    <p class="mt-1 text-sm font-semibold">
                                        {{ $student->program }}
                                    </p>

                                </div>

                            </div>

                            <a
                                href="{{ route('students.show', $student) }}"
                                class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-full bg-ink px-5 py-3 text-sm font-bold text-white"
                            >
                                View Student Profile

                                <svg
                                    class="h-4 w-4"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path d="M5 12h14"/>
                                    <path d="m13 6 6 6-6 6"/>
                                </svg>

                            </a>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

        <footer class="flex flex-col gap-2 px-2 py-6 text-xs text-gray-400 sm:flex-row sm:justify-between">

            <p>
                College of Information Technology · Student Registration Portal
            </p>

            <p>
                Laravel Client–Server Laboratory
            </p>

        </footer>

    </main>

</div>

<script>
    const searchInput = document.getElementById('searchInput');

    if (searchInput) {
        searchInput.addEventListener('input', function () {

            const searchValue = this.value.toLowerCase().trim();

            const desktopRows = document.querySelectorAll('.student-row');
            const mobileCards = document.querySelectorAll('.student-mobile-card');

            desktopRows.forEach(row => {

                const searchableText = row.dataset.search;

                if (searchableText.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

            mobileCards.forEach(card => {

                const searchableText = card.dataset.search;

                if (searchableText.includes(searchValue)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }

            });

        });
    }
</script>

</body>
</html>