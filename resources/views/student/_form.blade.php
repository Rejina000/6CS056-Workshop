
<x-form-input
    name="name"
    label="Name"
    :value="$student->name ?? ''"
    required
/>

<x-form-input
    name="email"
    label="Email"
    type="email"
    :value="$student->email ?? ''"
    required
/>

<x-form-input
    name="phone"
    label="Phone"
    :value="$student->phone ?? ''"
    required
/>

<x-form-textarea
    name="address"
    label="Address"
    :value="$student->address ?? ''"
/>

<x-form-input
    name="date_of_birth"
    label="Date of Birth"
    type="date"
    :value="$student->date_of_birth ?? ''"
/>