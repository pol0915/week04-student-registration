<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $student->first_name }} {{ $student->last_name }} | Student Profile</title>

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
                    circle at 10% 5%,
                    rgba(199, 243, 107, 0.16),
                    transparent 26%
                ),
                #F5F4EF;
        }
    </style>
</head>

<body class="font-sans text-ink antialiased">

<div class="min-h-screen">

    {{-- HEADER --}}
    <header class="border-b border-black/10 bg-paper/90 backdrop-blur">
        <div class="mx-auto flex max-w-[1450px] items-center justify-between px-5 py-4 sm:px-8 lg:px-10">

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

            <div class="flex items-center gap-3">

                <a
                    href="{{ route('students.index') }}"
                    class="hidden rounded-full border border-black/10 bg-white px-4 py-2.5 text-sm font-semibold transition hover:bg-gray-50 sm:inline-flex"
                >
                    Student Records
                </a>

                <a
                    href="{{ route('students.create') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-ink px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-black"
                >
                    New Registration

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
        </div>
    </header>

    <main class="mx-auto max-w-[1450px] px-5 py-8 sm:px-8 lg:px-10 lg:py-10">

        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))
            <div
                id="successBanner"
                class="mb-7 flex items-start justify-between gap-5 rounded-2xl border border-green-200 bg-green-50 px-5 py-4"
            >
                <div class="flex items-start gap-3">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700">

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="m5 12 4 4L19 6"/>
                        </svg>

                    </div>

                    <div>
                        <p class="font-semibold text-green-900">
                            Registration completed
                        </p>

                        <p class="mt-1 text-sm text-green-700">
                            {{ session('success') }}
                        </p>
                    </div>

                </div>

                <button
                    type="button"
                    onclick="document.getElementById('successBanner').remove()"
                    class="text-xl leading-none text-green-600 transition hover:text-green-900"
                >
                    &times;
                </button>
            </div>
        @endif

        {{-- PAGE HEADING --}}
        <div class="mb-7 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <p class="mb-2 text-xs font-bold uppercase tracking-[0.22em] text-gray-400">
                    Student Passport
                </p>

                <h1 class="font-display text-3xl font-extrabold tracking-tight sm:text-4xl">
                    Student Profile
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Official registration record stored in the student database.
                </p>
            </div>

            <div class="text-left sm:text-right">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                    Record Number
                </p>

                <p class="mt-1 font-display text-lg font-extrabold">
                    #{{ str_pad($student->id, 5, '0', STR_PAD_LEFT) }}
                </p>
            </div>

        </div>

        {{-- MAIN PROFILE --}}
        <div class="overflow-hidden rounded-[28px] border border-black/10 bg-white shadow-[0_30px_80px_rgba(23,26,31,0.08)]">

            <div class="grid lg:grid-cols-[360px_minmax(0,1fr)]">

                {{-- PROFILE CARD --}}
                <aside class="relative overflow-hidden bg-ink px-7 py-9 text-white sm:px-9 lg:min-h-[650px]">

                    <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full border border-white/10"></div>

                    <div class="absolute -right-8 -top-8 h-40 w-40 rounded-full border border-white/10"></div>

                    <div class="relative z-10">

                        <div class="mb-8 flex items-center justify-between">

                            <span class="rounded-full border border-white/15 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.18em] text-white/60">
                                Registered Student
                            </span>

                            <span class="h-2.5 w-2.5 rounded-full bg-lime"></span>

                        </div>

                        {{-- PROFILE IMAGE --}}
                        <div class="mb-6">

                            <div class="inline-block rounded-[26px] bg-white/10 p-2">

                                <img
                                    src="{{ asset('storage/' . $student->profile_picture) }}"
                                    alt="{{ $student->first_name }} {{ $student->last_name }}"
                                    class="h-40 w-40 rounded-[20px] object-cover"
                                >

                            </div>

                        </div>

                        <p class="text-xs font-semibold uppercase tracking-[0.20em] text-lime">
                            Student
                        </p>

                        <h2 class="mt-2 font-display text-3xl font-extrabold leading-tight">
                            {{ $student->first_name }}
                            {{ $student->middle_name ? $student->middle_name . ' ' : '' }}
                            {{ $student->last_name }}
                        </h2>

                        <p class="mt-3 font-mono text-sm text-white/55">
                            {{ $student->student_id }}
                        </p>

                        <div class="my-8 h-px bg-white/10"></div>

                        <div class="space-y-5">

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-white/35">
                                    Program
                                </p>

                                <p class="mt-1 text-sm font-medium leading-6 text-white/80">
                                    {{ $student->program }}
                                </p>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-white/35">
                                    Year Level
                                </p>

                                <p class="mt-1 text-sm font-medium text-white/80">
                                    {{ $student->year_level }}
                                </p>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-white/35">
                                    Registration Date
                                </p>

                                <p class="mt-1 text-sm font-medium text-white/80">
                                    {{ $student->created_at->format('F d, Y') }}
                                </p>
                            </div>

                        </div>

                    </div>

                </aside>

                {{-- PROFILE DETAILS --}}
                <section class="px-6 py-8 sm:px-9 lg:px-12 lg:py-10">

                    {{-- PERSONAL INFO --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="font-display text-sm font-extrabold text-gray-300">
                                01
                            </span>

                            <div>
                                <h3 class="font-display text-lg font-bold">
                                    Personal Information
                                </h3>

                                <p class="mt-1 text-xs text-gray-400">
                                    Basic identity information
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-x-8 gap-y-7 sm:grid-cols-2 xl:grid-cols-3">

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Student ID
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->student_id }}
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    First Name
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->first_name }}
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Middle Name
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->middle_name ?: '—' }}
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Last Name
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->last_name }}
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Date of Birth
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->date_of_birth->format('F d, Y') }}
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Gender
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->gender }}
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="my-9 border-t border-black/10"></div>

                    {{-- CONTACT --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="font-display text-sm font-extrabold text-gray-300">
                                02
                            </span>

                            <div>
                                <h3 class="font-display text-lg font-bold">
                                    Contact Information
                                </h3>

                                <p class="mt-1 text-xs text-gray-400">
                                    Student communication details
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-7 sm:grid-cols-2">

                            <div class="rounded-2xl bg-[#F7F7F4] p-5">

                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Email Address
                                </p>

                                <p class="mt-2 break-all text-sm font-semibold">
                                    {{ $student->email }}
                                </p>

                            </div>

                            <div class="rounded-2xl bg-[#F7F7F4] p-5">

                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Mobile Number
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->mobile_number }}
                                </p>

                            </div>

                            <div class="rounded-2xl bg-[#F7F7F4] p-5 sm:col-span-2">

                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Complete Address
                                </p>

                                <p class="mt-2 text-sm font-semibold leading-6">
                                    {{ $student->address }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="my-9 border-t border-black/10"></div>

                    {{-- ACADEMIC --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="font-display text-sm font-extrabold text-gray-300">
                                03
                            </span>

                            <div>
                                <h3 class="font-display text-lg font-bold">
                                    Academic Information
                                </h3>

                                <p class="mt-1 text-xs text-gray-400">
                                    Current program information
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-7 sm:grid-cols-2">

                            <div class="border-l-2 border-lime pl-4">

                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Academic Program
                                </p>

                                <p class="mt-2 text-sm font-semibold leading-6">
                                    {{ $student->program }}
                                </p>

                            </div>

                            <div class="border-l-2 border-lime pl-4">

                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Year Level
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    {{ $student->year_level }}
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- ACTIONS --}}
                    <div class="mt-10 flex flex-col gap-3 border-t border-black/10 pt-7 sm:flex-row">

                        <a
                            href="{{ route('students.create') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-ink px-6 py-3 text-sm font-bold text-white transition hover:bg-black"
                        >
                            Register Another Student

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

                        <a
                            href="{{ route('students.index') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-full border border-black/10 px-6 py-3 text-sm font-bold transition hover:bg-gray-50"
                        >
                            View Student Records

                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M5 12h14"/>
                                <path d="m13 6 6 6-6 6"/>
                            </svg>
                        </a>

                    </div>

                </section>

            </div>

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

</body>
</html>