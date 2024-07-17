<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>asesoria Dinámica de Frutas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container mx-auto mt-5">
        <h1>asesoria Dinámica de Frutas</h1>
        <form id="addFruitForm">
            <div class="mb-3">
                <label for="fruitName" class="form-label">Nombre de la Fruta</label>
                <input type="text" class="form-control" id="fruitName" required>
            </div>
            <div class="mb-3">
                <label for="fruitWeight" class="form-label">Peso</label>
                <input type="text" class="form-control" id="fruitWeight" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Fruta</button>
        </form>
        <table class="table mt-5" id="fruitTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Peso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas generadas por JavaScript -->
            </tbody>
        </table>
    </div>

    <script>
        let Todaslasasesorias = [];

        document.getElementById('addFruitForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const fruitName = document.getElementById('fruitName').value;
            const fruitWeight = document.getElementById('fruitWeight').value;

            const cadaAsesoria = {
                uniqid: generateUniqId(),
                asesoria: {
                    name: fruitName,
                    peso: fruitWeight
                }
            };

            Todaslasasesorias.push(cadaAsesoria);
            console.log(Todaslasasesorias[0]);
            renderTable();

            // Limpiar el formulario
            document.getElementById('addFruitForm').reset();
        });

        function generateUniqId() {
            return 'id-' + Math.random().toString(36).substr(2, 9);
        }

        function renderTable() {
            const tableBody = document.querySelector('#fruitTable tbody');
            tableBody.innerHTML = '';

            Todaslasasesorias.forEach(elemento => {
                const tr = document.createElement('tr');

                const nameTd = document.createElement('td');
                nameTd.textContent = elemento.asesoria.name;
                tr.appendChild(nameTd);

                const pesoTd = document.createElement('td');
                pesoTd.textContent = elemento.asesoria.peso;
                tr.appendChild(pesoTd);

                const actionsTd = document.createElement('td');
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Eliminar';
                deleteButton.className = 'btn btn-danger';
                deleteButton.onclick = () => deleteElement(elemento.uniqid);
                actionsTd.appendChild(deleteButton);
                tr.appendChild(actionsTd);

                tableBody.appendChild(tr);
            });
        }

        function deleteElement(uniqid) {
            Todaslasasesorias = Todaslasasesorias.filter(elemento => elemento.uniqid !== uniqid);
            renderTable();
        }

        // Renderizar la tabla por primera vez
        renderTable();
    </script>

</body>

</html>