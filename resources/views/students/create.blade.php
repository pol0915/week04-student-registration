<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration | CIT Enrollment Desk</title>

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
                        muted: '#6B7280',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background:
                radial-gradient(circle at 10% 10%, rgba(199, 243, 107, .14), transparent 30%),
                #F5F4EF;
        }

        input,
        select,
        textarea {
            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background-color .2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #171A1F !important;
            box-shadow: 0 0 0 3px rgba(23, 26, 31, 0.08);
            background: #fff;
        }

        .field-error {
            border-color: #EF4444 !important;
        }

        .upload-drag {
            transition:
                border-color .2s ease,
                background-color .2s ease,
                transform .2s ease;
        }

        .upload-drag:hover {
            background: #FAFAF7;
            border-color: #171A1F;
        }
    </style>
</head>

<body class="font-sans text-ink antialiased">

<div class="min-h-screen">

    {{-- TOP BAR --}}
    <header class="border-b border-black/10 bg-paper/80 backdrop-blur-md">
        <div class="mx-auto flex max-w-[1500px] items-center justify-between px-5 py-4 sm:px-8 lg:px-10">

            <a href="{{ route('students.create') }}" class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-ink text-white">
                    <span class="font-display text-sm font-extrabold">CIT</span>
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
                href="{{ route('students.index') }}"
                class="group flex items-center gap-2 text-sm font-semibold text-gray-700 transition hover:text-black"
            >
                Student Records

                <svg
                    class="h-4 w-4 transition-transform group-hover:translate-x-1"
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
    </header>

    {{-- MAIN --}}
    <main class="mx-auto max-w-[1500px] px-5 py-7 sm:px-8 lg:px-10 lg:py-10">

        <div class="grid overflow-hidden rounded-[28px] border border-black/10 bg-white shadow-[0_30px_80px_rgba(23,26,31,0.08)] lg:grid-cols-[350px_minmax(0,1fr)]">

            {{-- LEFT PANEL --}}
            <aside class="relative overflow-hidden bg-ink px-7 py-8 text-white sm:px-9 lg:min-h-[calc(100vh-150px)] lg:px-8 lg:py-10">

                <div class="absolute -left-20 -top-20 h-60 w-60 rounded-full border border-white/10"></div>
                <div class="absolute -left-4 -top-4 h-36 w-36 rounded-full border border-white/10"></div>

                <div class="relative z-10 flex h-full flex-col">

                    <div>
                        <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-white/15 px-3 py-1.5">
                            <span class="h-2 w-2 rounded-full bg-lime"></span>

                            <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-white/70">
                                Registration 2026
                            </span>
                        </div>

                        <p class="mb-3 text-xs font-semibold uppercase tracking-[0.24em] text-lime">
                            Student Passport
                        </p>

                        <h1 class="font-display text-3xl font-extrabold leading-[1.08] sm:text-4xl">
                            Create your
                            <span class="text-lime">student record.</span>
                        </h1>

                        <p class="mt-5 max-w-xs text-sm leading-6 text-white/60">
                            Complete the registration form using accurate and valid student information.
                        </p>
                    </div>

                    {{-- PROGRESS --}}
                    <div class="mt-10 space-y-6">

                        <div class="flex items-center gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-lime text-xs font-bold text-ink">
                                01
                            </div>

                            <div>
                                <p class="text-sm font-semibold">Identity</p>
                                <p class="text-xs text-white/45">Basic student details</p>
                            </div>
                        </div>

                        <div class="ml-[17px] h-7 w-px bg-white/15"></div>

                        <div class="flex items-center gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-white/20 text-xs font-bold text-white/65">
                                02
                            </div>

                            <div>
                                <p class="text-sm font-semibold">Contact</p>
                                <p class="text-xs text-white/45">Communication details</p>
                            </div>
                        </div>

                        <div class="ml-[17px] h-7 w-px bg-white/15"></div>

                        <div class="flex items-center gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-white/20 text-xs font-bold text-white/65">
                                03
                            </div>

                            <div>
                                <p class="text-sm font-semibold">Academics</p>
                                <p class="text-xs text-white/45">Program and year level</p>
                            </div>
                        </div>

                        <div class="ml-[17px] h-7 w-px bg-white/15"></div>

                        <div class="flex items-center gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-white/20 text-xs font-bold text-white/65">
                                04
                            </div>

                            <div>
                                <p class="text-sm font-semibold">Student Photo</p>
                                <p class="text-xs text-white/45">Profile identification</p>
                            </div>
                        </div>

                    </div>

                    <div class="mt-10 border-t border-white/10 pt-6 lg:mt-auto">
                        <div class="flex gap-3">

                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-lime"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>

                            <p class="text-xs leading-5 text-white/50">
                                Your information is validated on the server before it is stored in the student database.
                            </p>

                        </div>
                    </div>

                </div>
            </aside>

            {{-- FORM CONTENT --}}
            <section class="px-5 py-7 sm:px-8 lg:px-12 lg:py-10 xl:px-14">

                <div class="mx-auto max-w-4xl">

                    {{-- INTRO --}}
                    <div class="mb-9 flex flex-col justify-between gap-5 border-b border-black/10 pb-7 sm:flex-row sm:items-end">

                        <div>
                            <p class="mb-2 text-xs font-bold uppercase tracking-[0.20em] text-gray-400">
                                New Registration
                            </p>

                            <h2 class="font-display text-3xl font-extrabold tracking-tight sm:text-4xl">
                                Student information
                            </h2>

                            <p class="mt-3 max-w-xl text-sm leading-6 text-gray-500">
                                Fields marked with
                                <span class="font-semibold text-red-500">*</span>
                                are required.
                            </p>
                        </div>

                        <div class="shrink-0 rounded-full bg-[#F2F3EF] px-4 py-2 text-xs font-semibold text-gray-600">
                            Academic Year 2026
                        </div>

                    </div>

                    {{-- ALL VALIDATION ERRORS --}}
                    @if ($errors->any())
                        <div class="mb-8 rounded-2xl border border-red-200 bg-red-50 p-5">

                            <div class="flex items-start gap-3">

                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-600">
                                    <svg
                                        class="h-5 w-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <circle cx="12" cy="12" r="9"/>
                                        <path d="M12 7v6"/>
                                        <path d="M12 17h.01"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-semibold text-red-800">
                                        Please review your registration details.
                                    </p>

                                    <p class="mt-1 text-sm text-red-600">
                                        Some information is missing or invalid.
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endif

                    {{-- SUCCESS --}}
                    @if (session('success'))
                        <div class="mb-8 rounded-2xl border border-green-200 bg-green-50 p-5">
                            <div class="flex items-center gap-3">

                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-green-100 text-green-700">
                                    ✓
                                </div>

                                <div>
                                    <p class="font-semibold text-green-800">
                                        Registration successful
                                    </p>

                                    <p class="text-sm text-green-700">
                                        {{ session('success') }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endif

                    <form
                        action="{{ route('students.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="space-y-10"
                    >
                        @csrf

                        {{-- ===================================== --}}
                        {{-- SECTION 01 --}}
                        {{-- ===================================== --}}

                        <section>

                            <div class="mb-5 flex items-center gap-3">
                                <span class="font-display text-sm font-extrabold text-gray-300">
                                    01
                                </span>

                                <h3 class="font-display text-lg font-bold">
                                    Student Identity
                                </h3>
                            </div>

                            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                                {{-- STUDENT ID --}}
                                <div>
                                    <label for="student_id" class="mb-2 block text-sm font-semibold">
                                        Student ID <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="student_id"
                                        name="student_id"
                                        value="{{ old('student_id') }}"
                                        placeholder="e.g. 2026-00123"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('student_id') field-error @else border-black/10 @enderror"
                                    >

                                    @error('student_id')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- FIRST NAME --}}
                                <div>
                                    <label for="first_name" class="mb-2 block text-sm font-semibold">
                                        First Name <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="first_name"
                                        name="first_name"
                                        value="{{ old('first_name') }}"
                                        placeholder="First name"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('first_name') field-error @else border-black/10 @enderror"
                                    >

                                    @error('first_name')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- MIDDLE NAME --}}
                                <div>
                                    <label for="middle_name" class="mb-2 block text-sm font-semibold">
                                        Middle Name
                                    </label>

                                    <input
                                        type="text"
                                        id="middle_name"
                                        name="middle_name"
                                        value="{{ old('middle_name') }}"
                                        placeholder="Optional"
                                        class="w-full rounded-xl border border-black/10 bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400"
                                    >

                                    @error('middle_name')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- LAST NAME --}}
                                <div>
                                    <label for="last_name" class="mb-2 block text-sm font-semibold">
                                        Last Name <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="last_name"
                                        name="last_name"
                                        value="{{ old('last_name') }}"
                                        placeholder="Last name"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('last_name') field-error @else border-black/10 @enderror"
                                    >

                                    @error('last_name')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- DATE OF BIRTH --}}
                                <div>
                                    <label for="date_of_birth" class="mb-2 block text-sm font-semibold">
                                        Date of Birth <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="date"
                                        id="date_of_birth"
                                        name="date_of_birth"
                                        value="{{ old('date_of_birth') }}"
                                        max="{{ date('Y-m-d') }}"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm
                                        @error('date_of_birth') field-error @else border-black/10 @enderror"
                                    >

                                    @error('date_of_birth')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- GENDER --}}
                                <div>
                                    <label for="gender" class="mb-2 block text-sm font-semibold">
                                        Gender <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="gender"
                                        name="gender"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm
                                        @error('gender') field-error @else border-black/10 @enderror"
                                    >
                                        <option value="">Select gender</option>

                                        <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>
                                            Male
                                        </option>

                                        <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>
                                            Female
                                        </option>

                                        <option
                                            value="Prefer not to say"
                                            {{ old('gender') === 'Prefer not to say' ? 'selected' : '' }}
                                        >
                                            Prefer not to say
                                        </option>
                                    </select>

                                    @error('gender')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>
                        </section>

                        {{-- DIVIDER --}}
                        <div class="border-t border-black/10"></div>

                        {{-- ===================================== --}}
                        {{-- SECTION 02 --}}
                        {{-- ===================================== --}}

                        <section>

                            <div class="mb-5 flex items-center gap-3">
                                <span class="font-display text-sm font-extrabold text-gray-300">
                                    02
                                </span>

                                <h3 class="font-display text-lg font-bold">
                                    Contact Information
                                </h3>
                            </div>

                            <div class="grid gap-5 sm:grid-cols-2">

                                {{-- EMAIL --}}
                                <div>
                                    <label for="email" class="mb-2 block text-sm font-semibold">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="student@example.com"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('email') field-error @else border-black/10 @enderror"
                                    >

                                    @error('email')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- MOBILE --}}
                                <div>
                                    <label for="mobile_number" class="mb-2 block text-sm font-semibold">
                                        Mobile Number <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        inputmode="numeric"
                                        id="mobile_number"
                                        name="mobile_number"
                                        value="{{ old('mobile_number') }}"
                                        placeholder="09XXXXXXXXX"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('mobile_number') field-error @else border-black/10 @enderror"
                                    >

                                    @error('mobile_number')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- ADDRESS --}}
                                <div class="sm:col-span-2">
                                    <label for="address" class="mb-2 block text-sm font-semibold">
                                        Complete Address <span class="text-red-500">*</span>
                                    </label>

                                    <textarea
                                        id="address"
                                        name="address"
                                        rows="3"
                                        placeholder="House number, street, barangay, city/municipality, province"
                                        class="w-full resize-none rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm placeholder:text-gray-400
                                        @error('address') field-error @else border-black/10 @enderror"
                                    >{{ old('address') }}</textarea>

                                    @error('address')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>
                        </section>

                        <div class="border-t border-black/10"></div>

                        {{-- ===================================== --}}
                        {{-- SECTION 03 --}}
                        {{-- ===================================== --}}

                        <section>

                            <div class="mb-5 flex items-center gap-3">
                                <span class="font-display text-sm font-extrabold text-gray-300">
                                    03
                                </span>

                                <h3 class="font-display text-lg font-bold">
                                    Academic Information
                                </h3>
                            </div>

                            <div class="grid gap-5 sm:grid-cols-2">

                                {{-- PROGRAM --}}
                                <div>
                                    <label for="program" class="mb-2 block text-sm font-semibold">
                                        Program <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="program"
                                        name="program"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm
                                        @error('program') field-error @else border-black/10 @enderror"
                                    >
                                        <option value="">Select academic program</option>

                                        <option
                                            value="Bachelor of Science in Information Technology"
                                            {{ old('program') === 'Bachelor of Science in Information Technology' ? 'selected' : '' }}
                                        >
                                            BS Information Technology
                                        </option>

                                        <option
                                            value="Bachelor of Science in Computer Science"
                                            {{ old('program') === 'Bachelor of Science in Computer Science' ? 'selected' : '' }}
                                        >
                                            BS Computer Science
                                        </option>

                                        <option
                                            value="Bachelor of Science in Information Systems"
                                            {{ old('program') === 'Bachelor of Science in Information Systems' ? 'selected' : '' }}
                                        >
                                            BS Information Systems
                                        </option>
                                    </select>

                                    @error('program')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- YEAR LEVEL --}}
                                <div>
                                    <label for="year_level" class="mb-2 block text-sm font-semibold">
                                        Year Level <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="year_level"
                                        name="year_level"
                                        class="w-full rounded-xl border bg-[#FBFBF9] px-4 py-3 text-sm
                                        @error('year_level') field-error @else border-black/10 @enderror"
                                    >
                                        <option value="">Select year level</option>

                                        <option value="1st Year" {{ old('year_level') === '1st Year' ? 'selected' : '' }}>
                                            1st Year
                                        </option>

                                        <option value="2nd Year" {{ old('year_level') === '2nd Year' ? 'selected' : '' }}>
                                            2nd Year
                                        </option>

                                        <option value="3rd Year" {{ old('year_level') === '3rd Year' ? 'selected' : '' }}>
                                            3rd Year
                                        </option>

                                        <option value="4th Year" {{ old('year_level') === '4th Year' ? 'selected' : '' }}>
                                            4th Year
                                        </option>
                                    </select>

                                    @error('year_level')
                                        <p class="mt-1.5 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>
                        </section>

                        <div class="border-t border-black/10"></div>

                        {{-- ===================================== --}}
                        {{-- SECTION 04 --}}
                        {{-- ===================================== --}}

                        <section>

                            <div class="mb-5 flex items-center gap-3">
                                <span class="font-display text-sm font-extrabold text-gray-300">
                                    04
                                </span>

                                <h3 class="font-display text-lg font-bold">
                                    Student Portrait
                                </h3>
                            </div>

                            <div class="grid gap-6 lg:grid-cols-[1fr_180px]">

                                {{-- UPLOAD --}}
                                <div>
                                    <label
                                        for="profile_picture"
                                        id="uploadArea"
                                        class="upload-drag flex min-h-[190px] cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-black/15 bg-[#FBFBF9] px-6 py-8 text-center
                                        @error('profile_picture') field-error @enderror"
                                    >

                                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-ink text-white">

                                            <svg
                                                class="h-5 w-5"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7"
                                            >
                                                <path d="M12 16V4"/>
                                                <path d="m7 9 5-5 5 5"/>
                                                <path d="M5 14v5h14v-5"/>
                                            </svg>

                                        </div>

                                        <p class="font-semibold">
                                            Upload student profile picture
                                        </p>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Click here to choose an image
                                        </p>

                                        <span class="mt-4 rounded-full bg-white px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-gray-500">
                                            JPG · JPEG · PNG · Max 2 MB
                                        </span>

                                    </label>

                                    <input
                                        type="file"
                                        name="profile_picture"
                                        id="profile_picture"
                                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                        class="hidden"
                                    >

                                    @error('profile_picture')
                                        <p class="mt-2 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                {{-- PREVIEW --}}
                                <div class="flex flex-col items-center justify-center rounded-2xl border border-black/10 bg-[#F4F4F0] p-5">

                                    <div
                                        id="placeholderPreview"
                                        class="flex h-28 w-28 items-center justify-center rounded-full border border-black/10 bg-white"
                                    >
                                        <svg
                                            class="h-12 w-12 text-gray-300"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.4"
                                        >
                                            <circle cx="12" cy="8" r="4"/>
                                            <path d="M4 21a8 8 0 0 1 16 0"/>
                                        </svg>
                                    </div>

                                    <img
                                        id="imagePreview"
                                        src=""
                                        alt="Student profile preview"
                                        class="hidden h-28 w-28 rounded-full object-cover ring-4 ring-white"
                                    >

                                    <p class="mt-4 text-center text-xs font-semibold text-gray-500">
                                        PROFILE PREVIEW
                                    </p>

                                    <p
                                        id="fileName"
                                        class="mt-1 max-w-[150px] truncate text-center text-xs text-gray-400"
                                    >
                                        No image selected
                                    </p>

                                </div>

                            </div>
                        </section>

                        {{-- SUBMIT AREA --}}
                        <div class="flex flex-col gap-5 border-t border-black/10 pt-7 sm:flex-row sm:items-center sm:justify-between">

                            <div class="flex items-start gap-3">

                                <svg
                                    class="mt-0.5 h-4 w-4 shrink-0 text-gray-400"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 11v5"/>
                                    <path d="M12 8h.01"/>
                                </svg>

                                <p class="max-w-md text-xs leading-5 text-gray-500">
                                    Review all information before submitting. Duplicate student IDs and email addresses are not allowed.
                                </p>

                            </div>

                            <button
                                type="submit"
                                class="group inline-flex min-h-12 items-center justify-center gap-3 rounded-full bg-ink px-7 py-3.5 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-black"
                            >
                                Submit Registration

                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-lime text-ink">

                                    <svg
                                        class="h-4 w-4 transition-transform group-hover:translate-x-0.5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M5 12h14"/>
                                        <path d="m13 6 6 6-6 6"/>
                                    </svg>

                                </span>
                            </button>

                        </div>

                    </form>

                </div>
            </section>

        </div>

        {{-- FOOTER --}}
        <footer class="flex flex-col gap-2 px-2 py-6 text-xs text-gray-400 sm:flex-row sm:items-center sm:justify-between">
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
    const profileInput = document.getElementById('profile_picture');
    const imagePreview = document.getElementById('imagePreview');
    const placeholderPreview = document.getElementById('placeholderPreview');
    const fileName = document.getElementById('fileName');

    profileInput.addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (!file) {
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
            placeholderPreview.classList.remove('hidden');
            fileName.textContent = 'No image selected';
            return;
        }

        const allowedTypes = ['image/jpeg', 'image/png'];

        if (!allowedTypes.includes(file.type)) {
            alert('Please select a JPG, JPEG, or PNG image.');

            profileInput.value = '';
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
            placeholderPreview.classList.remove('hidden');
            fileName.textContent = 'No image selected';

            return;
        }

        const maxSize = 2 * 1024 * 1024;

        if (file.size > maxSize) {
            alert('The selected image must not exceed 2 MB.');

            profileInput.value = '';
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
            placeholderPreview.classList.remove('hidden');
            fileName.textContent = 'No image selected';

            return;
        }

        const reader = new FileReader();

        reader.onload = function (e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
            placeholderPreview.classList.add('hidden');
        };

        reader.readAsDataURL(file);

        fileName.textContent = file.name;
    });
</script>

</body>
</html>