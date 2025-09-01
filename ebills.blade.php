<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <script>
        const full_name = "{{ $full_name }}";
        const customer_type = "{{ $customer_type }}";
        const consumption = "{{ $consumption }}";
        const base_bill = "{{ number_format($base_bill, 2) }}";
        const fixed_charge = "{{ number_format($fixed_charge, 2) }}";
        const discount = "{{ number_format($discount, 2) }}";
        const total_bill = "{{ number_format($total_bill, 2) }}";

        alert(
            `=== ${full_name}'s Electricity Bill ===\n` +
            `Customer Type: ${customer_type}\n` +
            `Consumption: ${consumption} kWh\n` +
            `Base Bill: ₱${base_bill}\n` +
            `Fixed Charge: ₱${fixed_charge}\n` +
            `Discount: ₱${discount}\n` +
            `Total Bill: ₱${total_bill}`
        );
    </script>
</body>
</html>
