import Axios from "axios";

export const getProjectList = async () => {
  return await Axios.get("http://localhost/Laravel-React-Task-Manager/public/myTask/api/projects").then(
    (res) => {
      return res.data;
    }
  );
};

/**
 * storeNewProject()
 *
 * @param {object} data
 */
export const storeNewProject = async (data) => {
  data.user_id = 1;
  return await Axios.post(
    "http://localhost/Laravel-React-Task-Manager/public/myTask/api/projects",
    data
  ).then((res) => {
    return res.data;
  });
};

export const updateProject = async (id, data) => {
  data.user_id = 1;
  return await Axios.put(
    `http://localhost/Laravel-React-Task-Manager/public/myTask/api/projects/${id}`,
    data
  ).then((res) => {
    return res.data;
  });
};

export const deleteProject = async (id) => {
  console.log("id", id);
  return await Axios.delete(
    `http://localhost/Laravel-React-Task-Manager/public/myTask/api/projects/${id}`
  ).then((res) => {
    return res.data;
  });
};
