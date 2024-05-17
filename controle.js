function alpha(ch) {
  ch = ch.toUpperCase();
  i = 0;
  tr = true;
  do {
    if (ch.charAt(i) >= "A" && ch.charAt(i) <= "Z") {
      i++;
    } else {
      tr = false;
    }
  } while (tr == true && i < ch.length);
  return tr;
}
function verif1() {
  mat = document.getElementById("matr").value;
  nom = document.getElementById("nm").value;
  pr = document.getElementById("prn").value;
  if (mat.length != 4 || isNaN(mat)) {
    alert("matricule invalide !!");
    return false;
  }
  if (!alpha(nom)) {
    alert("nom invalide !!");
    return false;
  }
  if (!alpha(pr)) {
    alert("prenom invalide !!");
    return false;
  }
}
function verif2() {
  mat = document.getElementById("matr").value;
  area = document.getElementById("det").value;
  nbj = document.getElementById("nbr").value;
  if (mat.length != 4 || isNaN(mat)) {
    alert("matricule invalide !!");
    return false;
  }
  if (area == "") {
    alert("details doit etre non vide !!");
    return false;
  }
  if (nbj == "" || isNaN(nbj) || nbj < 0) {
    alert("nombre de jours invalide !!");
    return false;
  }
}
