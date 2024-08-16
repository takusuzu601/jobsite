<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Example</title>
    <style>
        .selected-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .remove-btn {
            margin-left: 10px;
            cursor: pointer;
            color: red;
        }
    </style>
</head>

<body>
    <form action="{{ route('sch') }}" method="get">
        @csrf
        <div>
            @foreach (config('genre.bust_types') as $value => $text)
                <label>
                    <input type="checkbox" name="items[]" value="{{ $value }}"
                        {{ in_array($value, session('selectedItems', [])) ? 'checked' : '' }}> {{ $text }}
                </label>
            @endforeach
        </div>

        <div id="selected-items">
            @if (session('selectedItems'))
                @foreach (session('selectedItems') as $value)
                    @php
                        $text = config('genre.bust_types')[$value];
                    @endphp
                    <div class="selected-item">
                        {{ $text }} <span class="remove-btn"
                            onclick="removeItem(this, '{{ $value }}')">x</span>
                    </div>
                    
                @endforeach
            @endif
        </div>
        //testtest

        <button type="submit">Submit</button>
    </form>

    <script>
        const itemLabels = @json(config('genre.bust_types'));

        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const value = e.target.value;
                const text = itemLabels[value];
                const selectedItemsDiv = document.getElementById('selected-items');
                if (e.target.checked) {
                    const div = document.createElement('div');
                    div.classList.add('selected-item');
                    div.innerHTML =
                        `${text} <span class="remove-btn" onclick="removeItem(this, '${value}')">x</span>`;
                    selectedItemsDiv.appendChild(div);
                } else {
                    const items = Array.from(selectedItemsDiv.querySelectorAll('.selected-item'));
                    items.forEach(item => {
                        if (item.textContent.includes(text)) {
                            item.remove();
                        }
                    });
                }
            });
        });

        function removeItem(element, value) {
            document.querySelector(`input[value="${value}"]`).checked = false;
            element.parentElement.remove();
        }
    </script>
</body>

</html>
