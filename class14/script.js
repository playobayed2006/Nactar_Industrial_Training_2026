function resultCalculate() {
    let name = document.getElementById("sname").value

    let bangla = parseFloat(document.getElementById("bangla").value)
    let english = parseFloat(document.getElementById("english").value)
    let math = parseFloat(document.getElementById("math").value)
    let science = parseFloat(document.getElementById("science").value)
    let ict = parseFloat(document.getElementById("ict").value)

    let status = document.createElement("h3")
    let totalNbr = document.createElement("h3")
    let avgNbr = document.createElement("h3")
    let grd = document.createElement("h3")

    if (bangla < 33 || english < 33 || math < 33 || science < 33 || ict < 33) {
        status.innerHTML = "<h3> Status: <span style='background: red;'> Failed </span> </h3>"

    } else if (bangla >= 33 || english >= 33 || math >= 33 || science >= 33 || ict >= 33) {
        status.innerHTML = "<h3> Status: <span style='background: green;'> Passed </span> </h3>"
    } else {
        status.innerHTML = "<h3> No Status </h3>"
    }

    let totalMark = bangla + english + math + science + ict
    let avgMark = totalMark / 5

    let grade = "";

    if (avgMark >= 80) {
        grade = "A+";
    } else if (avgMark >= 70) {
        grade = "A";
    } else if (avgMark >= 60) {
        grade = "A-";
    } else if (avgMark >= 50) {
        grade = "B";
    } else if (avgMark >= 40) {
        grade = "C";
    } else if (avgMark >= 33) {
        grade = "D";
    } else {
        grade = "F";
    }

    console.log(grade);

    totalNbr.innerHTML = " Total Marks: " + totalMark;
    avgNbr.innerHTML = " Average Marks: " + avgMark;
    grd.innerHTML = " Final Grade: " + grade;




    console.log(name)
    console.log(typeof bangla)

    let sinfo = document.createElement("h3")
    sinfo.innerHTML = "Student Name: " + name;

    let card = document.getElementById("student-card")
    card.className = "ssn"

    card.appendChild(sinfo)

    card.appendChild(totalNbr)
    card.appendChild(avgNbr)
    card.appendChild(grd)
    card.appendChild(status)


}

let n = 0
while (n <= 10) {
    console.log(n)
    n++
}

