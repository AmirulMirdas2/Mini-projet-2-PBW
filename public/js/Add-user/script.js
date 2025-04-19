document.getElementById("submitUser").addEventListener("click", function () {
    const username = document.getElementById("username").value;
    const role = document.getElementById("role").value;
    const password = document.getElementById("password").value;
    const email = document.getElementById("email").value;

    fetch("/api/add-user", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
        body: JSON.stringify({ username, role, password, email }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                document.getElementById("successMessage").style.display =
                    "block";
                document.getElementById("addUserForm").reset();
            } else {
                alert("Gagal mendaftarkan user.");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Terjadi kesalahan.");
        });
});
