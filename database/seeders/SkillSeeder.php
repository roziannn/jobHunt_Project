<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skillsList = [
            "Communication Skills",
            "Critical Thinking",
            "Problem Solving",
            "Creativity",
            "Teamwork",
            "Leadership",
            "Adaptability",
            "Time Management",
            "Emotional Intelligence",
            "Decision Making",
            "Analytical Skills",
            "Project Management",
            "Collaboration",
            "Negotiation",
            "Conflict Resolution",
            "Networking",
            "Presentation Skills",
            "Strategic Planning",
            "Research",
            "Data Analysis",
            "Digital Literacy",
            "Python",
            "Java",
            "JavaScript",
            "C++",
            "Ruby",
            "PHP",
            "Swift",
            "Kotlin",
            "TypeScript",
            "HTML/CSS",
            "Cybersecurity",
            "AWS (Amazon Web Services)",
            "Azure",
            "Google Cloud Platform",
            "Kubernetes",
            "Docker",
            "TensorFlow",
            "PyTorch",
            "scikit-learn",
            "Keras",
            "R",
            "SAS",
            "SPSS",
            "Financial Literacy",
            "Marketing Strategy",
            "Sales",
            "Customer Service",
            "Adobe Creative Suite (Photoshop, Illustrator, InDesign)",
            "Sketch",
            "Canva",
            "Adobe Premiere Pro",
            "Final Cut Pro",
            "DaVinci Resolve",
            "Content Writing",
            "Foreign Language Proficiency",
            "Public Speaking",
            "Sales",
            "Quality Assurance",
            "Figma",
            "Sketch",
            "Adobe XD",
            "React.js",
            "Angular",
            "Vue.js",
            "Node.js",
            "Django",
            "Flask",
            "Ruby on Rails",
            "ASP.NET",
            "React Native",
            "Flutter",
            "Xamarin",
            "Swift (iOS)",
            "Kotlin (Android)",
            "Social Media Management",
            "SEO (Search Engine Optimization)",
            "Supply Chain Management",
            "Public Relations",
            "Risk Management",
            "Coaching/Mentoring",
            "Learning Agility",
            "Crisis Management",
            "Health and Wellness",
            "Cultural Competence"
        ];


        foreach ($skillsList as $skill) {
            $data = new Skill();
            $data->name = $skill;
            $data->save();
        }
    }
}
