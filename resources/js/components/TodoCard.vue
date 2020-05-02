<template>
  <div class="card mt-3">
    <div class="card-header d-flex justify-content-between">
      <h5 :class="{ completed : completed }">{{ todo['title'] }}</h5>

      <div class="btn-group">
        <button
          type="button"
          class="btn btn-light dropdown-toggle"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        ></button>
        <div class="dropdown-menu">
          <button class="dropdown-item" @click="setCompleted">Mark As {{text}}</button>
          <a class="dropdown-item" :href="`/todo/${todo.id}/edit`">Edit</a>
          <button class="dropdown-item" @click="destroy">Delete</button>
        </div>
      </div>
    </div>
    <div class="card-body">
      <p class="card-text" :class="{ completed : completed }">{{ todo['text'] }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "todo-card",
  data() {
    return {
      completed: Boolean(this.todo["completed"]),
      text: "Completed"
    };
  },
  props: ["todo"],
  methods: {
    setCompleted() {
      const data = { ...this.todo };
      data.completed = !this.completed;
      data._method = "PATCH";

      axios.post(`/todo/${this.todo.id}`, data).then(res => {
        this.completed = !this.completed;
        this.completed
          ? (this.text = "Uncompleted")
          : (this.text = "Completed");
      });
    },

    destroy() {
      axios.post(`/todo/${this.todo.id}`, { _method: "DELETE" }).then(res => {
        window.location = "/todo";
      });
    }
  }
};
</script>

<style>
.completed {
  text-decoration: line-through;
}
</style>
