<div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $book->getCover() }}" height="200px">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                <h6>
                    <a href="{{route('book.show', $book)}}">{{ Str::limit($book->title, 10) }}</a>
                </h6>
                <p>{{ Str::limit($book->description, 60) }}</p>
                </div>
                <div class="card-action">
                <form action="{{route('book.borrow', $book)}}" method="POST">
                    @csrf
                    <button class="right btn waves-effect waves-light" type="submit">Pinjam Buku
                        <i class="material-icons right">add_shopping_cart</i>
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>