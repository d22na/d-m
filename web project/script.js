document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("recipeForm");

  form.addEventListener("submit", function (e) {
    let errors = [];

    const title = form.title.value.trim();
    const ingredients = form.ingredients.value.trim();
    const instructions = form.instructions.value.trim();

    if (title === "") errors.push("Recipe name is required.");
    if (ingredients === "") errors.push("Ingredients cannot be empty.");
    if (instructions === "") errors.push("Instructions are required.");

    if (errors.length > 0) {
      e.preventDefault(); 

      alert("Please fix the following errors:\n\n" + errors.join("\n"));
    }
  });
});
