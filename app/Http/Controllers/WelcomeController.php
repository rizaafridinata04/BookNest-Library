<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Open Library Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .book-card { width: 140px; text-align: center; margin: 10px; }
        .book-cover { height: 200px; object-fit: cover; }
        .section-title { margin-top: 40px; margin-bottom: 20px; }
        .stats { font-size: 1.2rem; font-weight: bold; }
    </style>
</head>
<body class="bg-light">
    <div class="container py-4">

        <h1 class="mb-4">Welcome to Open Library Clone</h1>

        <div class="row">
            <div class="col text-center">
                <div class="card p-3">📚 Read Free Books Online</div>
            </div>
            <div class="col text-center">
                <div class="card p-3">📅 Set a Yearly Goal</div>
            </div>
            <div class="col text-center">
                <div class="card p-3">📖 Track Your Favorites</div>
            </div>
        </div>

        <h3 class="section-title">Trending Books</h3>
        <div class="d-flex flex-wrap">
            @foreach (['Control Your Mind', 'La Roue du Temps', 'Court of Mist', 'Birthdays', 'Rich Dad', 'Game of Thrones'] as $index => $title)
                <div class="book-card">
                    <img src="https://via.placeholder.com/140x200?text=Book+{{ $index+1 }}" class="book-cover mb-2">
                    <div>{{ $title }}</div>
                    <button class="btn btn-sm btn-{{ ['secondary','dark','primary','primary','secondary','dark'][$index] }} mt-1">
                        {{ ['Not in Library','Checked Out','Preview Only','Preview Only','Not in Library','Checked Out'][$index] }}
                    </button>
                </div>
            @endforeach
        </div>

        <h3 class="section-title">Classic Books</h3>
        <div class="d-flex flex-wrap">
            @foreach (['Ghost Stories', 'Young Bess', 'La Femme', 'Mark Twain', 'Talisman', 'Geständnis'] as $title)
                <div class="book-card">
                    <img src="https://via.placeholder.com/140x200?text=Classic" class="book-cover mb-2">
                    <div>{{ $title }}</div>
                    <button class="btn btn-sm btn-primary mt-1">Borrow</button>
                </div>
            @endforeach
        </div>

        <h4 class="section-title">Browse by Subject</h4>
        <div class="d-flex flex-wrap mb-3">
            @foreach ([['Art',117861], ['Sci-Fi',19510], ['Fantasy',12788], ['Biographies',25739], ['Recipes',9397], ['Romance',19788]] as [$cat, $count])
                <div class="me-4">
                    <div>📘 {{ $cat }}</div>
                    <small>{{ number_format($count) }} Books</small>
                </div>
            @endforeach
        </div>

        <h4 class="section-title">Around the Library</h4>
        <div class="row text-center mb-4">
            @foreach ([['Visitors', 48883702], ['New Members', 198385], ['Catalog Edits', 951377], ['Lists Created', 2738], ['Ebooks Borrowed', 238237]] as [$label, $num])
                <div class="col">
                    <div class="stats">{{ number_format($num) }}</div>
                    <div>{{ $label }}</div>
                </div>
            @endforeach
        </div>

        <h4 class="section-title">About the Project</h4>
        <p>
            Open Library is an open, editable library catalog, building towards a web page for every book ever published.
            <a href="#">More</a>
        </p>

        <h5>Latest Blog Posts</h5>
        <ul>
            <li><a href="#">Refining the Open Library Catalogue - March 21, 2025</a></li>
            <li><a href="#">API Search Performance - Jan 16, 2025</a></li>
            <li><a href="#">Removing Dead-Ends - Oct 3, 2024</a></li>
        </ul>

    </div>
</body>
</html>
