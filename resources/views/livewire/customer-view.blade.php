<div class="card">
    <div class="card-header">
        {{ $customer->name }}
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p> {{ $customer->email }} </p>
            <footer class="blockquote-footer"> {{ $customer->phone }} </footer>
        </blockquote>
    </div>
</div>
