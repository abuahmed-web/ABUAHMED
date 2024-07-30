<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;600;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Noto Sans Arabic', sans-serif;
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-light {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }
        .text-success {
            color: #28a745 !important;
        }
        .text-danger {
            color: #dc3545 !important;
        }
        .project-wrapper {
            margin-bottom: 20px;
        }
        
        /* تنسيق حاوية العناصر */
.project-items-container {
    padding: 5px; /* المسافة من الحواف */

}

/* تنسيق كل عنصر في القائمة */
.project-item {
    margin-bottom: 10px; /* المسافة بين العناصر */
}

/* تنسيق الأزرار داخل العناصر */
.project-item button {
    border: none; /* إزالة الحدود الافتراضية للأزرار */
    border-radius: 5px; /* زوايا مدورة للأزرار */
    padding: 10px; /* المسافة داخل الأزرار */
    background-color: #6c757d; /* لون خلفية الأزرار */
    color: #ffffff; /* لون النص داخل الأزرار */
    font-size: 16px; /* حجم النص */
    font-weight: bold; /* سمك الخط */
    transition: background-color 0.3s; /* تأثير التغيير في الخلفية عند التحويم */
}

/* تأثير التمرير فوق الأزرار */
.project-item button:hover {
    background-color: #5a6268; /* لون خلفية الأزرار عند التحويم */
}

    </style>
    <style>
/* CSS */
.btn-group {
    display: flex;
    justify-content: space-between; /* توزيع الأزرار بشكل متساوي بين الجانبين */
    align-items: center; /* ضمان أن الأزرار في نفس الارتفاع */
        top: 1px;
}

.btn-group .btn {
    flex: 0 0 auto; /* عدم السماح للأزرار بالتمدد */
}
</style>
    <style>
    
    

/* تنسيق الخلايا */
td {
    border: 1px solid rgba(0, 0, 0, .2);
    padding: 12px 15px;
    text-align: center;
    vertical-align: middle;
    box-sizing: border-box; /* التأكد من أن padding لا يزيد حجم الخلية */
}

/* تنسيق الرأس */
.table>thead {
    background-color: #343a40;
    color: #ffffff;
}

.table>thead th {
    border: 1px solid #dee2e6;
    padding: 12px 15px;
    text-align: center;
    vertical-align: middle;
    box-sizing: border-box; /* التأكد من أن padding لا يزيد حجم الخلية */
}



    
.modal-content {
    width: 64%;
    height: 80vh;
    max-height: 90vh;
    max-width: 90%;
}
    
    /* تأكد من أن العنصر يظهر عند الحاجة */
#page-content-wrapper {
    display: block; /* أو يمكن استخدام display: flex; حسب التصميم */
    background-image: url('https://www.wmadaat.com/upload/white/white%20(2).jpg'); /* قم بتحديد مسار الصورة الخاصة بك */
    background-size: cover; /* لتغطية الخلفية بشكل كامل */
    background-position: center; /* محاذاة الصورة في المركز */
    background-repeat: no-repeat; /* عدم تكرار الصورة */
    color: #fff; /* تحديد لون النص إذا لزم الأمر */
    padding: 20px; /* إضافة حشو داخلي للتباعد */
    border-radius: 8px; /* إذا كنت ترغب في إضافة زوايا مستديرة */
}


    
    
    
      #sidebar-wrapper {
    width: 280px;
    transition: all 0.3s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 0;
    overflow: hidden;
}

        body {
            background-color: #f8f9fa;
            font-family: 'Noto Sans Arabic', sans-serif;
        }
        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar-wrapper {
            width: 280px;
            background-color: #343a40;
        }
        #sidebar-wrapper .list-group {
            min-width: 250px;
        }
        .google_user_img {
            border-radius: 50%;
            width: 32px;
            height: 32px;
        }
        .google_user_name {
            font-weight: bold;
        }
        .nav-link {
            color: white;
        }
        .nav-link.active {
            background-color: #495057;
        }
        .dropdown-menu-dark .dropdown-item {
            color: #ffffff;
        }
        .dropdown-menu-dark .dropdown-item:hover {
            color: #f8f9fa;
            background-color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d;
        }
        .btn-outline-secondary:hover {
            color: white;
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .navbar-light .navbar-toggler {
            border-color: rgba(0, 0, 0, 0.1);
        }
        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
    <style>
      
    /* CSS */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

#wrapper {
    display: flex;
    height: 100vh; /* تملأ الشاشة بالكامل */
    overflow: hidden; /* لمنع ظهور شريط التمرير */
}

#sidebar-wrapper {
    flex-shrink: 0; /* يمنع انكماش الشريط الجانبي */
}

#page-content-wrapper {
    flex: 1; /* يأخذ المساحة المتبقية */
    overflow-y: auto; /* يسمح بالتمرير عمودياً فقط */
}



    </style>
    <style>


        .code-display {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        
        .code-list {
    display: flex;
    flex-direction: row;
    gap: 10px;
    list-style-type: none;
    padding: 0;
}

.code-list li {
    flex: 1;
}

.code-list a {
    display: block;
    padding: 10px 20px;
    text-align: center;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.code-color-1 {
    background-color: #007bff; /* أزرق */
}

.code-color-2 {
    background-color: #28a745; /* أخضر */
}

.code-color-3 {
    background-color: #dc3545; /* أحمر */
}

.code-color-1:hover, .code-color-2:hover, .code-color-3:hover {
    opacity: 0.8;
}


    </style>
    <style>
        .d-none { display: none; }
        .project-wrapper { margin-bottom: 20px; }
        .project-items-container { margin-top: 10px; }
        .project-item { margin-bottom: 10px; }
        .google_user_img { border-radius: 50%; }
    </style>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar-wrapper">
            <a class="d-flex align-items-center mb-md-0 me-md-auto text-white text-decoration-none" href="/">
            
<span class="fs-4">ID تفعيل المدونة</span></a>

    

    <button class="btn btn-sm btn-outline-secondary m-1" onclick="show_activation_codes()" type="button">كود التحقق</button>


    <script>
    function show_activation_codes() {
        const codes = [
            { name: 'كود 1', code: '12345-ABCDE', colorClass: 'code-color-1' },
            { name: 'كود 2', code: '67890-FGHIJ', colorClass: 'code-color-2' },
            { name: 'كود 3', code: '54321-KLMNO', colorClass: 'code-color-3' }
        ];

        let htmlContent = '<ul class="code-list">';
        codes.forEach((item) => {
            htmlContent += `
                <li>
                    <a href="#" class="${item.colorClass}" onclick="display_code('${item.code}', '${item.name}'); return false;">${item.name}</a>
                </li>
            `;
        });
        htmlContent += '</ul><div id="code_display" class="code-display" style="display:none;"></div>';

        Swal.fire({
            title: 'كود التحقق',
            html: htmlContent,
            showCloseButton: true,
            showConfirmButton: false,
            customClass: {
                container: 'my-swal-container',
                popup: 'my-swal-popup'
            }
        });
    }

    function display_code(code, name) {
        const codeHtml = `
            <p>${name}: ${code}</p>
            <button onclick="copy_code('${code}')" class="btn btn-primary">نسخ</button>
            <button onclick="Swal.close()" class="btn btn-secondary">إغلاق</button>
        `;
        document.getElementById('code_display').innerHTML = codeHtml;
        document.getElementById('code_display').style.display = 'block';
    }

    function copy_code(code) {
        navigator.clipboard.writeText(code).then(() => {
            Swal.fire({
                title: 'تم النسخ!',
                text: 'تم نسخ الكود إلى الحافظة بنجاح.',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            });
        }).catch(err => {
            Swal.fire({
                title: 'خطأ',
                text: 'حدث خطأ أثناء نسخ الكود.',
                icon: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        });
    }
    </script>


            <hr>
            <a aria-expanded="false" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownUser1">
                <img alt="" class="rounded-circle me-2 google_user_img" height="32" src="https://blogger.googleusercontent.com/img/a/AVvXsEgCxtEuVmC3tuB04rOQ0auG4gj9TkTza-7YZwUoEK_9Fct-LoxePZQOCO-QaDRLeD8syjcTEvGp4MZEWv6ZICuEir8QqlWGmoYBM6jJ0OqNjiH902WFOELlPvWnSQ9kZpkxC6N2qoLFLYdavsO0UkCfJY2w3AzqpfnYr1vcW8kj1KqRsfWH3A_9wM4N=s256" width="32">
                <strong class="google_user_name">تسجيل الدخول</strong>
            </a>
            
            
            
            <hr>
            <ul class="nav nav-pills flex-column mb-auto projects_btn">
                <li class="nav-item no_tables_container">
                    <button aria-current="page" class="btn btn-secondary w-100 nav-link text-white" onclick="show_project_form('domain')" type="button">
                        <i class="fas fa-plus m-1"></i> حماية مشروع بالدومين 
                    </button>
                    <div id="projects_domain" class="project-items-container">
                        <!-- Projects with domain will be appended here -->
                    </div>
                    <button aria-current="page" class="btn btn-secondary w-100 nav-link text-white" onclick="show_project_form('id')" type="button">
                        <i class="fas fa-plus m-1"></i> حماية مشروع بـ ID 
                    </button>
                    <div id="projects_id" class="project-items-container">
                        <!-- Projects with ID will be appended here -->
                    </div>
                </li>
            </ul>
        </div>
        <!-- Page content wrapper -->
        <div id="page-content-wrapper">
            <!-- Page content -->
            <div class="container-fluid">
                <div id="projects_container"></div>
                <div id="project_details" class="d-none"></div>
            </div>
        </div>
    </div>

    <!-- تضمين jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    

<script>
    // Show project details
    function showProjectDetails(projectId) {
        const projectWrapper = document.getElementById(`project_wrapper_${projectId}`);
        if (projectWrapper) {
            document.querySelectorAll('.project-wrapper').forEach(wrapper => wrapper.classList.add('d-none'));
            projectWrapper.classList.remove('d-none');
            fetchActivations(projectId); // Fetch activations for the project
        } else {
            console.log(`Project with ID ${projectId} not found.`);
        }
    }

    // Initialize project ID counter
    let projectIdCounter = 1;

    // Function to create a new project
function create_new_project(type, projectName) {
    if (!projectName) {
        alert('يرجى إدخال اسم المشروع.');
        return;
    }

    $.ajax({
        url: 'add_project.php',
        method: 'POST',
        data: { name: projectName, type: type },
        success: function(response) {
            try {
                const result = JSON.parse(response);
                if (result.success) {
                    const projectId = result.projectId;
                    const projectHtml = `
                        <div id="project_wrapper_${projectId}" class="project-wrapper d-none">
                            <div class="btn-group">
                                <button class="btn btn-secondary" onclick="activate_new_entry(${projectId}, '${type}')">
                                    <span>تحويل جديد</span>
                                </button>
                                <button class="btn btn-danger" onclick="deleteProject(${projectId})">
                                    <i class="fas fa-trash-alt"></i> حذف المشروع
                                </button>
                            </div>
                            <div class="filter">
                                <label>بحث:
                                    <input type="search" class="form-control form-control-sm" id="search_project_${projectId}" placeholder="" aria-controls="project_${projectId}" onkeyup="filterTable(${projectId})">
                                </label>
                            </div>
                            <table id="project_${projectId}" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>${type === 'domain' ? 'الدومين' : 'معرف المدونة'}</th>
                                        <th>حالة التحويل</th>
                                        <th>وقت التحويل</th>
                                        <th>الأوامر</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_${projectId}">
                                    <!-- Rows will be inserted here -->
                                </tbody>
                            </table>
                        </div>
                    `;
                    document.getElementById('projects_container').innerHTML += projectHtml;

                    const buttonHtml = `
                        <div class="project-item">
                            <button class="btn btn-secondary w-100" onclick="showProjectDetails(${projectId})">${projectName}</button>
                        </div>
                    `;
                    const container = document.querySelector(`#projects_${type}`);
                    if (container) {
                        container.innerHTML += buttonHtml;
                    } else {
                        console.error('Container not found for type:', type);
                    }

                    hide_project_form(); // Hide the form after saving the project
                } else {
                    alert('حدث خطأ أثناء إضافة المشروع: ' + result.error);
                }
            } catch (e) {
                console.error('Error parsing response:', e);
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX error:', status, error);
        }
    });
}


    // Show project form
    function show_project_form(type) {
        const formHtml = `
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">إنشاء مشروع جديد (${type === 'domain' ? 'دومين' : 'معرف مدونة'})</h5>
                    <div class="mb-3">
                        <label for="projectName" class="form-label">اسم المشروع</label>
                        <input type="text" class="form-control" id="projectName" placeholder="أدخل اسم المشروع">
                    </div>
                    <button class="btn btn-primary" onclick="create_new_project('${type}', document.getElementById('projectName').value)">
                        <i class="fas fa-save"></i> حفظ
                    </button>
                    <button class="btn btn-secondary" onclick="hide_project_form()">إلغاء</button>
                </div>
            </div>
        `;

        const projectDetails = document.getElementById('project_details');
        projectDetails.innerHTML = formHtml;
        projectDetails.classList.remove('d-none');
    }

    // Hide project form
    function hide_project_form() {
        const projectDetails = document.getElementById('project_details');
        projectDetails.innerHTML = '';
        projectDetails.classList.add('d-none');
    }

    // Activate new entry in project
function activate_new_entry(projectId, type) {
    const domainOrId = prompt("أدخل النطاق أو المعرف:");
    if (domainOrId) {
        $.ajax({
            url: 'https://control-panel.abuahmed-web.com/domain-id/activate_entry.php',
            method: 'POST',
            data: { projectId: projectId, domainOrId: domainOrId, type: type },
            success: function(response) {
                console.log('Raw response:', response); // إضافة هذا السطر للطباعة في وحدة التحكم
                try {
                    // تحقق من نوع الاستجابة
                    const result = typeof response === 'string' ? JSON.parse(response) : response;
                    if (result.success) {
                        fetchActivations(projectId);
                    } else {
                        alert('حدث خطأ أثناء تفعيل الدخول: ' + result.error);
                    }
                } catch (e) {
                    console.error('خطأ في تحليل الاستجابة:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('خطأ في طلب AJAX:', status, error);
            }
        });
    }
}


    // Fetch activations for a project
    function fetchActivations(projectId) {
        $.ajax({
            url: 'fetch_activations.php',
            method: 'GET',
            data: { projectId: projectId },
            success: function(response) {
                try {
                    const result = JSON.parse(response);
                    if (Array.isArray(result)) {
                        const tbody = document.getElementById(`tbody_${projectId}`);
                        if (tbody) {
                            tbody.innerHTML = ''; // Clear existing rows
                            result.forEach(activation => {
                                const rowHtml = `
                                    <tr>
                                        <td>${activation.id}</td>
                                        <td>${activation.domain_or_id}</td>
                                        <td>${activation.activation_status}</td>
                                        <td>${activation.activation_time}</td>
                                        <td>
                                            <button class="btn btn-dark text-danger" onclick="toggle_activation(${activation.id}, this)">
                                                <i class="fas fa-circle"></i>
                                            </button>
                                            <button class="btn btn-danger" onclick="delete_activation(${activation.id}, ${projectId}, this)">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                `;
                                tbody.insertAdjacentHTML('beforeend', rowHtml);
                            });
                        } else {
                            console.error('Table body not found for project ID:', projectId);
                        }
                    } else if (result.error) {
                        console.error('Error:', result.error);
                    }
                } catch (e) {
                    console.error('Error parsing response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        });
    }

$(document).ready(function() {
    $('tr').each(function() {
        var status = $(this).find('td:eq(2) p').text().trim();
        var icon = $(this).find('button i');

        if (status === 'مفعل') {
            icon.removeClass('fa-circle text-danger').addClass('fa-check-circle text-success');
        } else if (status === 'غير مفعل') {
            icon.removeClass('fa-check-circle text-success').addClass('fa-circle text-danger');
        }
    });
});

function toggle_activation(id, button) {
    $.post('toggle_activation.php', { id: id }, function(response) {
        try {
            var data = typeof response === 'string' ? JSON.parse(response) : response;
            
            if (data.success) {
                var icon = $(button).find('i');
                if (data.new_status === 'مفعل') {
                    icon.removeClass('fa-circle text-danger').addClass('fa-check-circle text-success');
                } else {
                    icon.removeClass('fa-check-circle text-success').addClass('fa-circle text-danger');
                }
                $(button).closest('tr').find('td:eq(2)').html('<p class="' + (data.new_status === 'مفعل' ? 'text-success' : 'text-danger') + '">' + data.new_status + '</p>');
            } else {
                alert('فشل في تبديل حالة التفعيل: ' + data.error);
            }
        } catch (e) {
            console.error("Error parsing JSON response: ", e);
            alert("حدث خطأ أثناء معالجة البيانات.");
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("AJAX request failed: ", textStatus, errorThrown);
        alert("فشل في إرسال الطلب: " + textStatus);
    });
}

$.ajaxSetup({ cache: true }); // أو قم بإزالة هذا السطر تماماً



    // Delete activation
    function delete_activation(activationId, projectId, button) {
        if (!activationId) {
            console.error('قيمة activationId غير محددة.');
            return;
        }

        if (confirm('هل أنت متأكد أنك تريد حذف هذا التفعيل؟')) {
            $.ajax({
                url: 'delete_activation.php',
                method: 'POST',
                data: { activationId: activationId },
                success: function(response) {
                    console.log('استجابة الخادم:', response); // إضافة هذا السطر للطباعة في وحدة التحكم
                    try {
                        const result = typeof response === 'string' ? JSON.parse(response) : response;
                        if (result.success) {
                            console.log('تم حذف التفعيل بنجاح');
                            if (button.closest('tr')) {
                                button.closest('tr').remove();
                            } else {
                                console.error('الصف غير موجود في الجدول');
                            }
                        } else {
                            alert('حدث خطأ أثناء حذف التفعيل: ' + result.error);
                        }
                    } catch (e) {
                        console.error('خطأ في تحليل الاستجابة:', e);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('خطأ في طلب AJAX:', status, error);
                }
            });
        }
    }

    // Delete project
function deleteProject(projectId) {
    if (!projectId) {
        console.error('قيمة projectId غير محددة.');
        return;
    }

    if (confirm('هل أنت متأكد أنك تريد حذف هذا المشروع؟')) {
        $.ajax({
            url: 'delete_project.php', // اسم الملف الذي يحتوي على الكود PHP
            type: 'POST',
            data: { id: projectId }, // تأكد من إرسال القيمة بشكل صحيح
            dataType: 'json',
            success: function(response) {
                console.log('استجابة الخادم:', response);

                if (response.success) {
                    console.log('تم حذف المشروع بنجاح');
                    // قم بإزالة العنصر من الواجهة
                    const projectWrapper = document.getElementById(`project_wrapper_${projectId}`);
                    if (projectWrapper) {
                        projectWrapper.remove(); // إزالة العنصر من الصفحة
                        console.log('تمت إزالة العنصر من الواجهة بنجاح');
                    } else {
                        console.error('العنصر غير موجود في الواجهة');
                    }
                } else {
                    alert('حدث خطأ أثناء حذف المشروع: ' + response.error);
                }
            },
            error: function(xhr, status, error) {
                console.error('خطأ في طلب AJAX:', status, error);
            }
        });
    }
}

    // Filter table by search input
    function filterTable(projectId) {
        const input = document.getElementById(`search_project_${projectId}`).value.toLowerCase();
        const table = document.getElementById(`project_${projectId}`);
        const rows = table.getElementsByTagName('tr');
        
        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let found = false;
            for (let j = 1; j < cells.length - 1; j++) {
                if (cells[j].innerText.toLowerCase().includes(input)) {
                    found = true;
                    break;
                }
            }
            rows[i].style.display = found ? '' : 'none';
        }
    }

    // Initial call to fetch projects
    $(document).ready(function() {
        fetchProjects();
    });

    // Fetch projects from server
    function fetchProjects() {
        $.ajax({
            url: 'fetch_projects.php',
            method: 'GET',
            success: function(response) {
                try {
                    const result = JSON.parse(response);
                    if (Array.isArray(result)) {
                        const projectsContainer = document.getElementById('projects_container');
                        projectsContainer.innerHTML = '';
                        result.forEach(project => {
                            const projectHtml = `
                                <div id="project_wrapper_${project.id}" class="project-wrapper d-none">
                                    <div class="btn-group">
                                        <button class="btn btn-secondary" onclick="activate_new_entry(${project.id}, '${project.type}')">
                                            <span>تحويل جديد</span>
                                        </button>
                                        <button class="btn btn-danger" onclick="deleteProject(${project.id})">
                                            <i class="fas fa-trash-alt"></i> حذف المشروع
                                        </button>
                                    </div>
                                    <div class="filter">
                                        <label>بحث:
                                            <input type="search" class="form-control form-control-sm" id="search_project_${project.id}" placeholder="" aria-controls="project_${project.id}" onkeyup="filterTable(${project.id})">
                                        </label>
                                    </div>
                                    <table id="project_${project.id}" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>${project.type === 'domain' ? 'الدومين' : 'معرف المدونة'}</th>
                                                <th>حالة التحويل</th>
                                                <th>وقت التحويل</th>
                                                <th>الأوامر</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_${project.id}">
                                            <!-- Rows will be inserted here -->
                                        </tbody>
                                    </table>
                                </div>
                            `;
                            projectsContainer.innerHTML += projectHtml;

                            const buttonHtml = `
                                <div class="project-item">
                                    <button class="btn btn-secondary w-100" onclick="showProjectDetails(${project.id})">${project.name}</button>
                                </div>
                            `;
                            const container = document.querySelector(`#projects_${project.type}`);
                            if (container) {
                                container.innerHTML += buttonHtml;
                            } else {
                                console.error('Container not found for type:', project.type);
                            }
                        });
                    } else if (result.error) {
                        console.error('Error:', result.error);
                    }
                } catch (e) {
                    console.error('Error parsing response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        });
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>






</body>
</html>