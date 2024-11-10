<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Expenses Edit</h1>
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="amount" placeholder="Amount" value="{{ $expense->amount }}">
        <input type="text" name="description" placeholder="Description" value="{{ $expense->description }}">
        <select name="category">
            <option value="food" {{ $expense->category === 'food' ? 'selected' : '' }}>Food</option>
            <option value="transport" {{ $expense->category === 'transport' ? 'selected' : '' }}>Transport</option>
            <option value="utilities" {{ $expense->category === 'utilities' ? 'selected' : '' }}>Utilities</option>
            <option value="entertainment" {{ $expense->category === 'entertainment' ? 'selected' : '' }}>Entertainment</option>
            <option value="other" {{ $expense->category === 'other' ? 'selected' : '' }}>Other</option>
        </select>
        <input type="date" name="expense_date" value="{{ $expense->expense_date }}">
        <select name="payment_method">
            <option value="cash" {{ $expense->payment_method === 'cash' ? 'selected' : '' }}>Cash</option>
            <option value="card" {{ $expense->payment_method === 'card' ? 'selected' : '' }}>Card</option>
            <option value="bank_transfer" {{ $expense->payment_method === 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
