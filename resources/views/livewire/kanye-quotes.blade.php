<div class="container d-flex justify-content-center">
    <div class="col col-lg-6 md-12 mt-5">
        <button class="btn btn-success mb-3" wire:click="fetchQuotes">Update Quotes</button>
        <ul class="list-group">
            @foreach($quotes as $quote)
                <li class="list-group-item">{{ $quote }}</li>
            @endforeach
        </ul>
    </div>
</div>

<script>
        setInterval(function() {
            @this.getQuotesFromDB()
        }, 5000);
</script>
