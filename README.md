# PiscineComunali-db
Project completed for the exam in Databases and Web - Date of Completion: July 2021


# Description of the Application Domain
The purpose of this project is to develop a simplified version for managing municipal swimming pools for a medium/large-sized municipality. For each pool, identified by its name, it is desired to store the address, a set of phone numbers, the opening period, information about the facility such as the number and type of pools (outdoor, indoor, Olympic, baby swimming, infant swimming), number of lanes for pools that can be divided into lanes, period of use, and finally, the data of the manager. Note that a manager could "manage" more than one pool, in which case it is important to know when they are available at each facility they are responsible for. The municipality offers swimming courses (baby swimming, youth, adults, each with levels from I to III) activated in all facilities, possibly with different methods and schedules; Each facility has the option to offer specific courses to its users. Some courses (baby swimming and infant swimming) can only be activated in facilities with suitable pools. For each course held in a facility, it is desired to store some information: the cost, the minimum and maximum number of participants, the timing of the various editions, and the possible lane in which it takes place. Instructors can be permanently employed by the facilities, in which case it is important to store the number of available vacation days, or they may be subject to seasonal contracts of annual duration or a fraction thereof; for each instructor, personal data, contact details, and a list of qualifications possessed (e.g., swimming instructor, fitness instructor, water polo instructor, etc.) are of interest. It is desired to keep track of the work history of instructors; note that an instructor may have worked/work in multiple facilities but may also have replaced the "regular" colleague several times in the same year (obviously in different periods). Each instructor can attend multiple editions of the same course or different courses. People enrolled in any edition of a course, even more than one, must be registered and identified by the number of the personal card issued at the time of registration. To attend, it is mandatory to obtain a medical certificate, valid for the season, attesting to fitness for sports practice. It is desired to maintain the information of the doctors who issued the certificates, the date of the visit, and the enrolled individuals who do not have the certificate.
