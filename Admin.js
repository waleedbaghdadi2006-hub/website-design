
    let products = [
        { id: 1, name: "Whey Protein Gold", price: 59.99, stock: 45, category: "بروتين", image: "https://via.placeholder.com/50?text=WP", desc: "بروتين مصل حليب عالي الجودة" },
        { id: 2, name: "Creatine Monohydrate", price: 29.99, stock: 8, category: "كرياتين", image: "https://via.placeholder.com/50?text=Creatine", desc: "كرياتين نقي لزيادة القوة" },
        { id: 3, name: "BCAA 2:1:1", price: 34.99, stock: 120, category: "أحماض أمينية", image: "https://via.placeholder.com/50?text=BCAA", desc: "أحماض أمينية متفرعة" }
    ];

    let editingId = null;

    function renderProducts() {
        const tbody = document.getElementById('productsTableBody');
        tbody.innerHTML = '';
        products.forEach(product => {
            const row = document.createElement('tr');
            const stockClass = product.stock < 10 ? 'stock-low' : 'stock-high';
            const stockText = product.stock < 10 ? 'مخزون منخفض' : 'متوفر';
            row.innerHTML = `
                <td><img src="${product.image}" class="product-image" onerror="this.src='https://via.placeholder.com/50?text=Product'"></td>
                <td><strong>${product.name}</strong><br><small style="color:#94a3b8">${product.desc.substring(0,40)}</small></td>
                <td>${product.category}</td>
                <td>$${product.price}</td>
                <td><span class="stock-badge ${stockClass}">${product.stock} (${stockText})</span></td>
                <td class="action-buttons">
                    <button class="edit-btn" onclick="editProduct(${product.id})"><i class="fas fa-edit"></i> تعديل</button>
                    <button class="delete-btn" onclick="deleteProduct(${product.id})"><i class="fas fa-trash"></i> حذف</button>
                </td>
            `;
            tbody.appendChild(row);
        });
    }

    function toggleForm() {
        const form = document.getElementById('productForm');
        form.classList.toggle('show');
        if (!form.classList.contains('show')) {
            editingId = null;
            document.getElementById('formTitle').innerText = 'إضافة منتج جديد';
            clearForm();
        }
    }

    function clearForm() {
        document.getElementById('productName').value = '';
        document.getElementById('productPrice').value = '';
        document.getElementById('productStock').value = '';
        document.getElementById('productCategory').value = 'بروتين';
        document.getElementById('productDesc').value = '';
        document.getElementById('productImage').value = '';
    }

    function editProduct(id) {
        const product = products.find(p => p.id === id);
        if (product) {
            editingId = id;
            document.getElementById('formTitle').innerText = 'تعديل المنتج';
            document.getElementById('productName').value = product.name;
            document.getElementById('productPrice').value = product.price;
            document.getElementById('productStock').value = product.stock;
            document.getElementById('productCategory').value = product.category;
            document.getElementById('productDesc').value = product.desc;
            document.getElementById('productImage').value = product.image;
            const form = document.getElementById('productForm');
            if (!form.classList.contains('show')) {
                form.classList.add('show');
            }
        }
    }

    function saveProduct() {
        const name = document.getElementById('productName').value;
        const price = parseFloat(document.getElementById('productPrice').value);
        const stock = parseInt(document.getElementById('productStock').value);
        const category = document.getElementById('productCategory').value;
        const desc = document.getElementById('productDesc').value;
        const image = document.getElementById('productImage').value || 'https://via.placeholder.com/50?text=Product';

        if (!name || isNaN(price) || isNaN(stock)) {
            alert('يرجى ملء جميع الحقول الأساسية');
            return;
        }

        if (editingId) {
            // تعديل
            const index = products.findIndex(p => p.id === editingId);
            products[index] = { ...products[index], name, price, stock, category, desc, image };
        } else {
            // إضافة جديدة
            const newId = Math.max(...products.map(p => p.id), 0) + 1;
            products.push({ id: newId, name, price, stock, category, desc, image });
        }

        renderProducts();
        toggleForm();
        clearForm();
        editingId = null;
    }

    function deleteProduct(id) {
        if (confirm('هل أنت متأكد من حذف هذا المنتج؟')) {
            products = products.filter(p => p.id !== id);
            renderProducts();
        }
    }

    // ربط زر القائمة الجانبية "إضافة منتج" مع النموذج
    document.querySelectorAll('.nav-item')[1].addEventListener('click', (e) => {
        e.preventDefault();
        toggleForm();
    });

    renderProducts();

