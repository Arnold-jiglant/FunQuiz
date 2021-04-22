import Users from "./components/admin/Users"
import Players from "./components/admin/Players"
import TopicQuestions from "./components/admin/TopicQuestions"
import Topics from "./components/admin/Topics"
import Tags from "./components/admin/Tags"
import Profile from "./components/admin/Profile"

export const routes = [
    {path: '/users', component: Users},
    {path: '/players', component: Players},
    {path: '/topic-questions', component: TopicQuestions},
    {path: '/topics', component: Topics},
    {path: '/tags', component: Tags},
    {path: '/profile', component: Profile},
];
