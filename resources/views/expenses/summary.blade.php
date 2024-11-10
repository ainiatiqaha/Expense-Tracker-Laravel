<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Expenses Summary</h1>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <input type="text" name="amount" placeholder="Amount">
        <input type="text" name="description" placeholder="Description">
        <select name="category">
            <option value="food">Food</option>
            <option value="transport">Transport</option>
            <option value="utilities">Utilities</option>
            <option value="entertainment">Entertainment</option>
            <option value="other">Other</option>
        </select>
        <input type="date" name="expense_date">
        <select name="payment_method">
            <option value="cash">Cash</option>
            <option value="card">Card</option>
            <option value="bank_transfer">Bank Transfer</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
