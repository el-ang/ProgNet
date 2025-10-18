<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Mahasiswa</title>
        <link rel="stylesheet" href="../../../assets/style/root.css">
        <link rel="stylesheet" href="../../../assets/style/table.css">
        <link rel="stylesheet" href="../../../assets/style/crud.css">
        <link rel="shortcut icon" href="../../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>CRUD Mahasiswa</h4>
            <nav>
                <input type="search" name="key" id="search">
                <input type="button" id="search">
                <input type="checkbox" id="sort">
                <div class="sort">
                    <input type="checkbox" name="sort" value="NIM">
                    <input type="checkbox" name="sort" value="Nama">
                    <input type="checkbox" name="sort" value="Prodi">
                </div>
                <input type="checkbox" id="order">
                <a href="./add.php" class="add"></a>
                <a href="" class="del" disabled></a>
            </nav>
            <table>
                <thead>
                    <td><input type="checkbox" id="all"></td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Lainnya</td>
                </thead>
                <tbody>
                </tbody>
            </table>
        </main>
        <a href="../../../" class="back">&larr; Kembali</a>
        <script>
            const tb = document.querySelector('table');
            const search = { in: document.querySelector('input[name="key"]'), btn: document.querySelector('input[type="button"]#search') };
            const sortCheckboxes = document.querySelectorAll('input[name="sort"]');
            const orderCheckbox = document.querySelector('input[type="checkbox"]#order');
            const allCheckbox = document.querySelector('#all');
            const delLink = document.querySelector('.del');
            
            const curr = { sort: '', order: 'asc' };
            
            // Load initial data
            loadStudentData();
            
            // Search functionality
            search.btn.addEventListener('click', () => loadStudentData() );
            
            search.in.addEventListener('keypress', e => { if (e.key === 'Enter') loadStudentData(); });
            
            // Sort functionality
            sortCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', e => {
                    if (e.target.checked) {
                        // Uncheck other sort options
                        sortCheckboxes.forEach(cb => { if (cb !== e.target) cb.checked = false; });
                        curr.sort = e.target.value.toLowerCase();
                    } else curr.sort = '';
                    loadStudentData();
                });
            });
            
            // Order functionality
            orderCheckbox.addEventListener('change', e => {
                curr.order = e.target.checked ? 'desc' : 'asc';
                loadStudentData();
            });
            
            // Select all functionality
            allCheckbox.addEventListener('change', e => {
                const rowCheckboxes = document.querySelectorAll('tbody input[type="checkbox"]');
                rowCheckboxes.forEach(cb => cb.checked = e.target.checked);
                updateActionLinks();
            });
            
            // Function to load student data via AJAX
            async function loadStudentData() {
                try {
                    const params = new URLSearchParams();
                    params.append('mode', 'stud');
                    
                    // Add search keyword if present
                    if (search.in.value.trim()) params.append('key', search.in.value.trim());
                    
                    // Add sorting if selected
                    if (curr.sort) {
                        params.append('sort', curr.sort);
                        params.append('order', curr.order);
                    }
                    
                    const response = await fetch(`../sns.php?${params.toString()}`);
                    const data = await response.json();
                    
                    if (data.status === 200) updateTable(data.data);
                    else console.error('Error loading data:', data.res);
                } catch (error) { console.error('Ajax error:', error); }
            }
            
            // Function to update table with new data
            function updateTable(students) {
                // Remove existing tbody if exists
                const existingTbody = tb.querySelector('tbody');
                if (existingTbody) existingTbody.remove();
                
                // Create new tbody
                const tbody = document.createElement('tbody');
                
                if (students && students.length > 0) {
                    // Add data rows
                    students.forEach(student => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td><input type="checkbox" class="row-checkbox" data-id="${student.id}"></td>
                            <td>${student.nim || ''}</td>
                            <td>${student.nama || ''}</td>
                            <td>${student.prodi || ''}</td>
                            <td class="more-column"><div class="dropdown">
                                <button class="dropdown-btn" data-id="${student.id}">⋮</button>
                                <div class="dropdown-content">
                                    <a href="./edit.php?id=${student.id}">Edit</a>
                                    <a href="./del.php?id=${student.id}">Delete</a>
                                </div></div>
                            </td>`;
                        tbody.appendChild(row);
                    });
                } else {
                    const noDataRow = document.createElement('tr');
                    noDataRow.innerHTML = `<td colspan="5" style="text-align: center; padding: 20px; color: #666;">Data tidak ditemukan</td>`;
                    tbody.appendChild(noDataRow);
                }
                
                tb.appendChild(tbody);
                
                const rowCheckboxes = document.querySelectorAll('.row-checkbox');
                rowCheckboxes.forEach(cb => { cb.addEventListener('change', updateActionLinks); });
                
                // Add event listeners to dropdown buttons
                const dropdownBtns = document.querySelectorAll('.dropdown-btn');
                dropdownBtns.forEach(btn => {
                    btn.addEventListener('click', e => {
                        e.stopPropagation();
                        const dropdown = btn.nextElementSibling;
                        document.querySelectorAll('.dropdown-content').forEach(content => { if (content !== dropdown) content.style.display = 'none'; });
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    });
                });
                
                // Close dropdowns when clicking outside
                document.addEventListener('click', () => { document.querySelectorAll('.dropdown-content').forEach(content => { content.style.display = 'none'; }); });
                
                // Reset select all checkbox
                allCheckbox.checked = false;
                updateActionLinks();
            }
            
            // Function to update delete link based on checkbox selection
            function updateActionLinks() {
                const checkedBoxes = document.querySelectorAll('.row-checkbox:checked');
                const checkedIds = Array.from(checkedBoxes).map(cb => cb.dataset.id);
                
                if (checkedIds.length >= 1) {
                    // Single or multiple selection - enable delete
                    if (checkedIds.length === 1) delLink.href = `./del.php?id=${checkedIds[0]}`;
                    else delLink.href = `./del.php?ids=${checkedIds.join(',')}`;
                    delLink.removeAttribute('disabled');
                    delLink.style.pointerEvents = 'auto';
                } else {
                    // No selection - disable delete
                    delLink.href = '';
                    delLink.setAttribute('disabled', 'true');
                    delLink.style.pointerEvents = 'none';
                }
            }
        </script>
    </body>
</html>