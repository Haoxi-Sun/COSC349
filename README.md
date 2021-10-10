# COSC349 (Completed in 2020)
In this paper we will learn about the fundamental principles and technologies used to build cloud computing platforms and applications hosted in the cloud. We will explore how cloud computing works, how it is evolving, and how to best use it. This paper will teach you about the fundamental technologies used by cloud computing providers to build their platforms. You will also learn how to redesign software to use cloud computing.
## Assignment 1
### Learning objectives
The aims of the assignment include the following learning objectives:
1. to demonstrate that you understand how virtualisation can usefully underpin application development; (This is also particularly true of application development for cloud computing.)
2. to employ, in practice, fundamental concepts in cloud-ready software development, such as automated provisioning of virtual machines;
3. to carry out research to discover open source projects and materials that you can use within your application development work; and
4. to deliver software that is well tested and documented.
### Problem description
For this assignment you should design and develop an application whose deployment relies on virtualisation. Your application should operate through coordination of at least three different virtual machines (VMs). One of your VMs should be responsible for data storage that is important to your application.

However, this assignment is not focused on the functionality of your application: the assignment is focused on how you build your application, and in particular how you facilitate other developers potentially modifying, (re)building and running your application. Your use of virtualisation should allow a developer to build and run your application even if they check out your project’s git repository on a different host operating system from yours.

The assignment has been designed with use of Vagrant in mind, although use of other tools available on the Computer Science Lab F computers is acceptable too, such as using (non-Vagrant) scripts to automate VirtualBox functionality.

The easiest way for a virtualised application to provide an interface to (nondeveloper) users is through the use of web technologies; and a common way to manage application data is through use of a relational database. Starter material for both web and database technology is included in the lab exercises. However, because COSC349 is not a web technology or database paper, marking will not focus on the details of your web implementation or database modelling. Any other form of user interface or storage is acceptable too, provided that your design does not require your users to have advanced computing qualifications

You are welcome to use others’ code within software components and as a starting point for your assignment, but you still need to build an application of your own design. Any use of others’ resources must be attributed by you, both in your in-code documentation and in your project report. Further, the history of commits in your git repository will be examined to determine what, and how much code and configuration you added into your project.

A developer must be able to modify your application by changing source files in their clone of your git repository, and then be able to rebuild their instance of your application on their virtualisation host.

## Assignment 2
### Learning objectives
The aims of the assignment include the following learning objectives:
1. to demonstrate that you can build and deploy software onto cloud hosting environments;
2. to employ services made available by cloud providers within your software;
3. to carry out research to discover open source projects and materials that you can use within your application development work; and
4. to deliver software that is well tested and documented.
### Problem description
For this assignment you will deploy an application to the cloud, and provide instructions on how to use it. The application will be of your design, and will use multiple interacting virtual machines—at least two virtual machines must be used. These VMs can be EC2 instances, but they can also be containers, if you’d prefer.

You must use a non-EC2 cloud-based service to provide storage to your application. For example, this could be a relational database hosted by the Amazon Relational Database Service (RDS), or you could employ Amazon S3 object storage. There are many more storage services that you can research and use. You must choose and integrate one further non-EC2 cloud service, different from the one you have used for storage. Describe and justify your choices of non-EC2 cloud-provided services within your project report.

You are welcome to build on the application you designed and deployed for assignment 1. As for assignment 1, assignment 2 is not focused on the application itself, the assignment is focused on how you deployed your application and what cloud services you have used.

You do not need to fully automate your deployment (e.g., using tools such as Terraform, or suitable plug-ins for Vagrant), but where you take manual steps to deploy your application into the cloud, these steps should be explained within the documentation included within your repository, for the sake of a hypothetical new developer joining your team. (Material intended only for the marking team can be included within your project report.)

It is typical for cloud applications to provide an interface to (non-developer) users through the use of web technologies. Because COSC349 is not a web technology paper, marking will not focus on the details of your web implementation. Any other form of interface is acceptable, provided that it does not require your potential users to have advanced computing qualifications to use it.

You are welcome to use others’ code within software components and as a starting point for your assignment, but you still need to build an application of your own design and deploy it into the cloud. Any use of others’ resources must be attributed by you in your in-code comments and within documentation included within your repository. Further, the history of commits in your git repository will be examined to determine what, and how much code and configuration you added into your project.
