function getUsers() {
    const apiUrl = "http://localhost";
    const $list = $('.users-list');
    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json'
    })
        .done((res) => {
            $list.empty();
            //robimy pętlę po zwróconej kolekcji
            //dołączając do tabeli kolejne wiersze
            res.forEach(el => {
                $list.append(`<tr>
                    <td>${el.id}</td>
                    <td>${el.name}</td>
                    <td>${el.email}</td>
                    <td>${el.role}</td>
                    <td>
                    <button class="btn btn-danger" type="button" onclick="deleteUser(${el.id})">
                    <i class="material-icons">delete_forever</i>
                    </button>
                    </td>
                    </tr>`);
            })
        });
}

function deleteUser(id) {
    if (!confirm('Do you want to delete this user?')) {
        return;
    }
    const apiUrl = "http://localhost";
    $.ajax({
        url : apiUrl + '/?page=admin_delete_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected user successfully deleted from database!');
            getUsers();
        }
    });
}

